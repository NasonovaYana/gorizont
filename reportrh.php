<?php
$name =$_POST['actorrhrp'];
// Параметры для подключения
$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_name = "gorizont";
// Подключение к базе данных
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$result = mysqli_query($db, "SELECT * FROM markrh WHERE actor=$name");

?>
<html>
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<style>
    body{
        background-color: black;
        color: white;
        font-family: Montserrat;
    }
</style>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title>Пример скрипта авторизации</title>
 </head>
  <body><div align="center">
<table border="1"  width="800px">
<tr><td>Дата</td><td>Часы</td>
<td>Оценка</td><td>Комментарий</td></tr>
<?php
$query = "SELECT * FROM `markrh` ";
$res		= mysqli_query($db, $query);
while($mass = mysqli_fetch_array($res))
{
$id=$mass['daterh'];
$login=$mass['realtime'];
$mail=$mass['mark'];
$reg_time=$mass['note'];

echo '<tr><td>'.$id.'</td><td>'.$login.'</td>';
echo '<td>'.$mail.'</td><td>'.$reg_time.'</td></tr>';

}


?>
</table>	</body>
</html>


