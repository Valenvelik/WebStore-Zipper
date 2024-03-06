<?php require_once '/OSPanel/domains/project/connect/database.php';

$hieroglyph = $_POST['hieroglyph'];
$meaning = $_POST['meaning'];
$pinyin = $_POST['pinyin'];

mysqli_query($connect,"INSERT INTO `word` (`id_word`, `hieroglyph`, `meaning`, `pinyin`, `part_references`) VALUES (NULL, '$hieroglyph', '$meaning', '$pinyin', '$part_references')");

header('Location: /dictionary.php');