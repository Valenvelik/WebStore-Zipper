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
    <h1>Редактирование картинок</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Название картинки</th>
                        <th>Картинка</th>
                        <th></th>
                        <th></th>

                    </tr>

                    <?php
                    $img = mysqli_query($connect, "SELECT * FROM `images`");
                    $img = mysqli_fetch_all($img);

                    foreach ($img as $img) {
                    ?>
                        <tr>
                            <td><?= $img[0] ?></td>
                            <td><?= $img[1] ?></td>
                            <td><?= $img[2] ?></td>

                            <td><a href="/admin/updateImg.php?id_img=<?= $img[0] ?>">Обновить</a></td>
                            <td><a href="/vendor/deleteIMG.php?id_img=<?= $img[0] ?>">Удалить</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <div class="col">
                <h3>Добавить новую картинку</h3>
                <form action="/vendor/creatIMG.php" method="post">
                    <p>Название картинки</p>
                    <input type="text" name="name_img" autocomplete="off"><br> <br>
                    <p>Картинка</p>
                    <input type="text" name="	img" autocomplete="off"><br> <br>
                    <button style="margin-bottom: 30px;" type="submit">Добавить новое слово
                </form>
            </div>
        </div>
    </div>
</body>

</html>