<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_name = "gorizont";
// Подключение к базе данных
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$evname = $_POST['nameev'];
$mark = $_POST['markev'];
$actor = $_POST['actors'];
$role = $_POST['role'];

if (!$db) {
    echo "Sorry <br>";
    echo mysqli_connect_error();
    exit();
}
//тест добавления
$sql = "INSERT INTO markev(evname, actor, role, mark) values ('$evname', '$actor', '$role','$mark')";
if ($db->query($sql) === TRUE) {
    echo "Данные внесены";
}