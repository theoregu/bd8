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
include("showTickets.php")
?>

<form action="insertIntoTickets.php" method="post">
    <label>Ціна</label><input name="price" type="text"><br>
    <label>ІД Відвідувача</label><input name="idVis" type="text"><br>
    <label>ІД Зоопарку</label><input name="idZoo" type="text"><br>
    <label>ІД Тварини</label><input name="idAni" type="text"><br>
    <input type="submit" value="Вставити рядок">
</form>

</body>
</html>