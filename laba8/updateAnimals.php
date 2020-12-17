<?php

$mysqli = new mysqli('localhost', 'root', '', 'zoopark'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}


$id = $_POST['id']; $species = $_POST['species']; $name = $_POST['name']; $weight = $_POST['weight'];

$sql = "UPDATE animals SET Name='$name', Species='$species', Weight='$weight' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
}
else
{
    echo "Error" . $sql . "<br/>" . $mysqli->error;
}



/*Закриваємо з'єднання*/
$mysqli->close();

include("showAnimals.php")
?>
