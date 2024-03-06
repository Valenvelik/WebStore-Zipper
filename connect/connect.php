<?php
$user="root";
$pasword="";
$host="localhost";
$db="Shop";
$dbh='mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh, $user, $pasword);
?>