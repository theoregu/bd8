<?php

$mysqli = new mysqli('localhost', 'root', '', 'zoopark'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id']; $price = $_POST['price']; $idVis = $_POST['idVis']; $idZoo = $_POST['idZoo']; $idAni = $_POST['idAni'];

$sql = "UPDATE tickets SET Price='$price', idVis='$idVis', idZoo='$idZoo', idAni='$idAni' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
}
else
{
    echo "Error" . $sql . "<br/>" . $mysqli->error;
}



/*Закриваємо з'єднання*/
$mysqli->close();

include("showTickets.php")
?>
