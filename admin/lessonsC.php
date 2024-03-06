<?php require_once '../connect/database.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Уроки</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
</head>
<style>
    th,
    td {
        padding: 10px;
    }

    th {
        background: #ff2e2e;
        color: #fff;
    }

    td {
        background: #ff6161;
    }

    h1 {
        text-align: center;
        padding: 30px;
    }

    a {
        text-decoration: none;
        color: #fff;
    }

    .row {
        display: flex;
        justify-content: space-between;
    }
</style>

<body>
    <h1>Редактирование уроков</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Название урока</th>
                        <th>Теория</th>
                        <th>Задание</th>
                        <th></th>
                        <th></th>

                    </tr>

                    <?php
                    $lesson = mysqli_query($connect, "SELECT * FROM `lesson`");
                    $lesson = mysqli_fetch_all($lesson);

                    foreach ($lesson as $lesson) {
                    ?>
                        <tr>
                            <td><?= $lesson[0] ?></td>
                            <td><?= $lesson[1] ?></td>
                            <td><?= $lesson[2] ?></td>
                            <td><?= $lesson[3] ?></td>

                            <td><a href="/admin/updateLes.php?id_lesson=<?= $lesson[0] ?>">Обновить</a></td>
                            <td><a href="/vendor/deleteLes.php?id_lesson=<?= $lesson[0] ?>">Удалить</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <div class="col">
                <h3>Добавить новый урок</h3>
                <form action="/vendor/createLes.php" method="post">
                    <p>Название Урока</p>
                    <input type="text" name="lesson_name" autocomplete="off"><br> <br>
                    <p>Теория</p>
                    <input type="text" name="theory" autocomplete="off"><br> <br>
                    <p>Задание</p>
                    <input type="text" name="task " autocomplete="off"> <br> <br>
                    <button style="margin-bottom: 30px;" type="submit">Добавить новое слово
                </form>
            </div>
        </div>
    </div>
</body>

</html>