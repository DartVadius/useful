Распарсить url и получить гет параметры
```php
parse_str(parse_url($url, PHP_URL_QUERY), $parameters);
print_r($parameters);
```
Или если гет параметры уже находятся в отдельной переменной, например пришли аяксом
```php
parse_str($post, $param);
print_r($param);
```
_____________________________


Валидация е-мейла по с помощью регулярных выражений
```php
$s = '"';
if (preg_match("/^(\w+([\.\w+])*)@\w+(\.\w+)?\.\w{2,3}$/i", $test) || preg_match("/^$s{1}.+$s{1}@\w+(\.\w+)?\.\w{2,3}$/i", $test)) {
    return TRUE;
} else {
    return False;
}
```

_____________________________


Синглтон

```php
final class Singleton {
   
    public static function getInstance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new Singleton();
        }
        return $inst;
    }
    
    private function __construct() {
        
    }
    private function __clone() {
        
    }   
}
```
