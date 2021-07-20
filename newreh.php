<?php

$datarh = $_POST['datetime'];
$typerh = $_POST['type'];
$time = $_POST['time'];

// Параметры для подключения
$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_name = "gorizont";
// Подключение к базе данных
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$db) {
    echo "Sorry <br>";
    echo mysqli_connect_error();
    exit();
}
//тест добавления
$sql = "INSERT INTO rehearsal(datarh, typerh, time) values ('$datarh', '$typerh', '$time')";

if ($db->query($sql) === TRUE) {
    echo "Данные внесены";
}
