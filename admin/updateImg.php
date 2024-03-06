<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id_img = $_GET['id_img'];
$img = mysqli_query($connect, "SELECT * FROM `images` WHERE id_img = '$id_img'");
$img = mysqli_fetch_assoc($img);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Редактирование записи</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Обновить запись</h1>
    <div class="container">
        <form action="/vendor/updateIMG.php" method="post">
            <input type="hidden" name="id_img" value="<?= $img['id_img'] ?>" autocomplete="off">

            <p>НАзвание урока</p>
            <input type="text" name="name_img" value="<?= $img['name_img'] ?>" autocomplete="off">

            <p>Теория</p>
            <input type="text" name="img" value="<?= $img['img'] ?>" autocomplete="off">

            <button style="margin-bottom: 30px;" type="submit">Сохранить изменения</button>
        </form>
    </div>

</body>

</html>