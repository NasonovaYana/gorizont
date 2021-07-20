<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">
    <link href="lk.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<style>
    body {
        color: white;
    }
</style>
<!--Навигация-->
<div class="navbar-header">
    <div class="navbar">
        <img src="logotype.png" id='logo' width="13.5%">
        <p id='logotext'>ЛИЧНЫЙ КАБИНЕТ<br>АКТЁРА</p>
        <div class="dropdown">
            <button class="dropbtn"><a href=index_act.html"><img src='timetable.svg' width="20px" id='actor'> </a>
            </button>
            <div class="dropdown-content">
                <a href="index_act.html">РАСПИСАНИЕ</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="contact.html"> <img src='call.svg' width="20px" id='camera'></a>
            </button>
            <div class="dropdown-content">
                <a href="contact.html">КОНТАКТЫ</a>
            </div>
        </div>
    </div>
</div>
<div>
    <!--Заголовок-->
    <p class="lk_h1">Расписание репетиций</p>
    <?php
    // Параметры для подключения
    $db_host = "localhost";
    $db_user = "root";
    $db_password = "1234";
    $db_name = "gorizont";
    // Подключение к базе данных
    $db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
    $result = mysqli_query($db, "SELECT * FROM rehearsal");
    $num = mysqli_num_rows($result);
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        echo $i . ' ' . $row['datarh'] . ' ' . $row['typerh'] . '<br>';
    }
    ?>
</div>
<!--Заголовок-->
<p class="lk_h1">Расписание мероприятий</p>
<?php
// Параметры для подключения
$db_host = "localhost";
$db_user = "root";
$db_password = "1234";
$db_name = "gorizont";
// Подключение к базе данных
$db = mysqli_connect($db_host, $db_user, $db_password, $db_name);
$result = mysqli_query($db, "SELECT * FROM events");
$num = mysqli_num_rows($result);
$i = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $i++;
    echo $i .' ' . $row['time']. ' ' . $row['date'] . ' ' . $row['evname'] . '<br>';
}
?>
</body>
</html>