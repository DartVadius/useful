<?php
/**
 * валидация е-мейла по с помощью регулярных выражений
 */
$s = '"';
if (preg_match("/^(\w+([\.\w+])*)@\w+(\.\w+)?\.\w{2,3}$/i", $test) || preg_match("/^$s{1}.+$s{1}@\w+(\.\w+)?\.\w{2,3}$/i", $test)) {
    print "true\n";
} else {
    print "false\n";
}
