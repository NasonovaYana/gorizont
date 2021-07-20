<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_name = "gorizont";
// Подключение к базе данных
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$daterh = $_POST['rhdata'];
$mark = $_POST['markrh'];
$actor = $_POST['actors'];
$note = $_POST['note'];
$realtime = $_POST['timerh'];
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
$sql = "INSERT INTO markrh(daterh, mark, actor, note, realtime) values ('$daterh', '$mark', '$actor', '$note','$realtime')";
if ($db->query($sql) === TRUE) {
    echo "Данные внесены";
}

