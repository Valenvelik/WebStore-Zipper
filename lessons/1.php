<?php require_once '../connect/database.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<link href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 1</title>
    <style>
        h1 {
            text-align: center;
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php require "../blocks/header.php" ?>

    <div class="container">
        <?php
        $lesson = mysqli_query($connect, "SELECT * FROM `lesson` WHERE ");
        $lesson = mysqli_fetch_all($lesson); ?>
        <?php require "../blocks/footer.php" ?>
    </div>

</body>

</html>