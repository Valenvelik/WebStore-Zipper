<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id_img = $_GET['id_img'];

mysqli_query($connect, "DELETE FROM `images` WHERE `images`.`id_img ` = '$id_img'");

header('Location: ../admin/img.php');