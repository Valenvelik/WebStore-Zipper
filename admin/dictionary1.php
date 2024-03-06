<?php require_once '../connect/database.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Словарь</title>
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
    <h1>Редактирование словаря</h1>
    <div class="container">
        <form method="post">
            <input type="text" name="search" class="search"><input type="submit" name="submit" value="Поиск">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $query = mysqli_query($connect, "SELECT * FROM `word` WHERE 'hieroglyph' LIKE '%$search%'");
            while($row = mysqli_fetch_assoc($query)) echo"<p>".$row['id_word']."</p><p>".$row['hieroglyph']."</p><p>".$row['meaning']."</p><p>".$row['pinyin']."</p><p>".$row['part_references']."</p>";
        }


        ?>
        <div class="row">
            <div class="col">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Иероглиф</th>
                        <th>Значение</th>
                        <th>Пиньинь</th>
                        <th>Часть речи</th>
                        <th></th>
                        <th></th>

                    </tr>

                    <?php
                    $word = mysqli_query($connect, "SELECT * FROM `word`");
                    $word = mysqli_fetch_all($word);

                    foreach ($word as $word) {
                    ?>
                        <tr>
                            <td><?= $word[0] ?></td>
                            <td><?= $word[1] ?></td>
                            <td><?= $word[2] ?></td>
                            <td><?= $word[3] ?></td>
                            <td><?= $word[4] ?></td>

                            <td><a href="/admin/updatePage.php?id_word=<?= $word[0] ?>">Обновить</a></td>
                            <td><a href="/vendor/delete.php?id_word=<?= $word[0] ?>">Удалить</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <div class="col">
                <h3>Добавить новое слово</h3>
                <form action="/vendor/create.php" method="post">
                    <p>Иероглиф</p>
                    <input type="text" name="hieroglyph" autocomplete="off"><br> <br>
                    <p>Значение</p>
                    <input type="text" name="meaning" autocomplete="off"><br> <br>
                    <p>Пиньинь</p>
                    <input type="text" name="pinyin" autocomplete="off"> <br> <br>
                    <p>Часть речи</p>
                    <textarea name="part_references"></textarea> <br> <br>
                    <button style="margin-bottom: 30px;" type="submit">Добавить новое слово
                </form>
            </div>
        </div>
    </div>
</body>

</html>