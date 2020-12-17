<?php

$mysqli = new mysqli('localhost', 'root', '', 'zoopark'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}

$name = $_POST['name']; $secondname = $_POST['secondname']; $position = $_POST['position'];

$sql = "INSERT INTO workers (Name, SecondName, Position) VALUES ('$name', '$secondname', '$position' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
}
else
{
    echo "Error" . $sql . "<br/>" . $mysqli->error;
}



/*Закриваємо з'єднання*/
$mysqli->close();

include("showWorkers.php")
?>