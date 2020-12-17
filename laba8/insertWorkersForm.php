<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include("showWorkers.php")
?>

<form action="insertIntoWorkers.php" method="post">
    <label>Ім'я</label><input name="name" type="text"><br>
    <label>Прізвище</label><input name="secondname" type="text"><br>
    <label>Посада</label><input name="position" type="text"><br>
    <input type="submit" value="Вставити рядок">
</form>

</body>
</html>
