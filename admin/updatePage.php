<?php
require_once '/OSPanel/domains/project/connect/database.php';

$id_word = $_GET['id_word'];
$word = mysqli_query($connect, "SELECT * FROM `word` WHERE id_word = '$id_word'");
$word = mysqli_fetch_assoc($word);
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
            <input type="hidden" name="id_word" value="<?= $word['id_word'] ?>" autocomplete="off">

            <p>Иероглиф</p>
            <input type="text" name="hieroglyph" value="<?= $word['hieroglyph'] ?>" autocomplete="off">

            <p>Значение</p>
            <input type="text" name="meaning" value="<?= $word['meaning'] ?>" autocomplete="off">

            <p>Пиньинь</p>
            <input type="text" name="pinyin" value="<?= $word['pinyin'] ?>"> <br> <br>

            <p>Часть речи</p>
            <textarea name="part_references"><?= $word['part_references'] ?></textarea> <br> <br>

            <button style="margin-bottom: 30px;" type="submit">Сохранить изменения</button>
        </form>
    </div>

</body>

</html>