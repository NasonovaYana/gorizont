<?php
$evnamea = $_POST['evname'];
$datea = $_POST['date'];
$placea = $_POST['place'];
$actora = $_POST['actor'];
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
$sql = "INSERT INTO events(evname, date, place, actor) values ('$evnamea', '$datea', '$placea', '$actora')";
if ($db->query($sql) === TRUE) {
    echo "Данные внесены";
}
?>