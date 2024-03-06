<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id_word = $_GET['id_word'];

mysqli_query($connect, "DELETE FROM `word` WHERE `word`.`id_word` = '$id_word'");

header('Location: ../admin/dictionary1.php');
