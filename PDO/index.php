<?php
require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));
session_start();
$error = $msg = $sql = $count = '';
$tables = array();
$logged = FALSE;
$opt = array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM
);
if ($_POST['logout']) {
    session_destroy();
    header('Location: index.php');
}
if (!$_SESSION['logged']) {
    if (isset($_POST)){
        $_SESSION['bd'] = $_POST['bd'];
        $_SESSION['log'] = $_POST['login'];
        $_SESSION['pass'] = $_POST['password'];
        try {
            $dbh = new PDO("mysql:host=localhost;dbname={$_SESSION['bd']}", $_SESSION['log'], $_SESSION['pass'], $opt);
            $logged = TRUE;
        } catch (PDOException $e) {
            if ($_POST['bd'] == '' && $_POST['login'] == '') {
                $error = '';
            } else {
                $error = "Error!: " . $e->getMessage();
            }
            $logged = FALSE;
        }
    }
    $_SESSION['logged'] = $logged;
}
if ($_SESSION['logged']) {
    $dbh = new PDO("mysql:host=localhost;dbname={$_SESSION['bd']}", $_SESSION['log'], $_SESSION['pass'], $opt);
    $msg = "Вы подключены к базе данных ".$_SESSION['bd']." как ".$_SESSION['log'];
    $result = $dbh->query("SHOW TABLES");
    $i = 0;
    while ($row = $result->fetch()) {
        $tables[$i]['table'] = $row[0];
        $result2 = $dbh->query("SHOW COLUMNS FROM {$row[0]}");
        $f = array();
        while ($field = $result2->fetch()) {
            $f[] = $field[0];
        }
        $tables[$i]['column'] = $f;
        $i++;
    }
    if (isset($_POST['sql'])) {
        $sql = $_POST['sql'];
        $req = array();
        $nameReq = array();
        $sqlMsg = '';
        $result = $dbh->prepare("$sql");
        $result->execute();
        for ($i = 4; $i > 0; $i--) {
            $_SESSION['sql'][$i] = $_SESSION['sql'][$i-1];
        }
        $_SESSION['sql'][0] = $sql;
        if ($result->columnCount()) {
            $colcount = $result->columnCount();
            for ($i = 0; $i < $colcount; $i++) {
                $meta = $result->getColumnMeta($i);
                $nameReq[$i]['name'] = $meta['name'];
                $nameReq[$i]['table'] = $meta['table'];
            }
            $req = $result->fetchAll();
        } else {
            $count = $result->rowCount();
            if ($count) {
                $sqlMsg = "Количество модифицированных строк: {$count}";
            } else {
                $sqlMsg = 'Это невалидный запрос';
            }
        }
    }
}

echo $twig->render('login.tpl', [
    'session' => $_SESSION,
    'error' => $error,
    'msg' => $msg,
    'tables' => $tables,
    'sql' => $sql,
    'req' => $req,
    'namereq' => $nameReq,
    'sqlmsg' => $sqlMsg
    ]);

