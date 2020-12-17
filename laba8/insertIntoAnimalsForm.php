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
include("showAnimals.php")
?>

<form action="insertIntoAnimals.php" method="post">
    <label>Вид</label><input name="species" type="text"><br>
    <label>Назва</label><input name="name" type="text"><br>
    <label>Вага</label><input name="weight" type="text"><br>
    <input type="submit" value="Вставити рядок">
</form>

</body>
</html>
