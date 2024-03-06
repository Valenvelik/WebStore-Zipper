<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'Shop');

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$connect) {
    die('Error connect to database!');
}
?>