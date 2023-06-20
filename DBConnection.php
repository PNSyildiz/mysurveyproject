<?php //connection


$hn ='localhost';
$db ='surveys';
$un ='Pascoa';
$pw ='Pascoa';


$connection = new mysqli($hn, $db, $un, $pw);
if ($connnection->connect_error) die("Fatal Error");
?>
