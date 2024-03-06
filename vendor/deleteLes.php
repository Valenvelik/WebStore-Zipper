<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id_lesson = $_GET['id_lesson'];

mysqli_query($connect, "DELETE FROM `lesson` WHERE `lesson`.`id_lesson` = '$id_lesson'");

header('Location: ../admin/lessonsC.php');
