<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id = $_POST['id_word'];
$hieroglyph = $_POST['hieroglyph'];
$meaning = $_POST['meaning'];
$pinyin = $_POST['pinyin'];
$part_references = $_POST['part_references'];


mysqli_query($connect, "UPDATE `word` SET `hieroglyph` = '$hieroglyph', `meaning` = '$meaning', `pinyin` = '$pinyin', `part_references` = '$part_references' WHERE `word`.`id_word` = '$id'");

header('Location: /vendor/update.php');
?>