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
        include("showVisitors.php")
    ?>

    <form action="insertIntoVisitors.php" method="post">
        <label>Ім'я</label><input name="name" type="text"><br>
        <label>Прізвище</label><input name="sn" type="text"><br>
        <label>Вік</label><input name="age" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
