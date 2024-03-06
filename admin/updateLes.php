<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id_lesson = $_GET['id_lesson'];
$lesson = mysqli_query($connect, "SELECT * FROM `lesson` WHERE id_lesson = '$id_lesson'");
$lesson = mysqli_fetch_assoc($lesson);
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
        <form action="/vendor/update.php" method="post">
            <input type="hidden" name="id_lesson" value="<?= $lesson['id_lesson'] ?>" autocomplete="off">

            <p>НАзвание урока</p>
            <input type="text" name="lesson_name" value="<?= $lesson['lesson_name'] ?>" autocomplete="off">

            <p>Теория</p>
            <input type="text" name="theory" value="<?= $lesson['theory'] ?>" autocomplete="off">

            <p>Задание</p>
            <input type="text" name="task" value="<?= $lesson['task'] ?>"> <br> <br>

            <button style="margin-bottom: 30px;" type="submit">Сохранить изменения</button>
        </form>
    </div>

</body>

</html>