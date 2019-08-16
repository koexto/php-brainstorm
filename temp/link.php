<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

function array_baz(&$param)
{
    $param = 5;
}
$var = 3;
array_baz($var);
var_dump($var);
