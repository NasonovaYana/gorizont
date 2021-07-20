<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="lk.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Навигация-->
<div class="navbar-header">
    <div class="navbar">
        <img src="logotype.png" id='logo' width="13.5%">
        <p id='logotext'>ЛИЧНЫЙ КАБИНЕТ<br>ПЕДАГОГА</p>
        <div class="dropdown">
            <button class="dropbtn"><a href=index_teach.html"><img src='timetable.svg' width="20px" id='actor'> </a>
            </button>
            <div class="dropdown-content">
                <a href="index_teach.php">РЕПЕТИЦИИ</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"> <a href="feedback.php"> <img src='report.svg' width="20px" id='camera'></a>
            </button>
            <div class="dropdown-content">
                <a href="feedback.php">ОБРАТНАЯ СВЯЗЬ</a>
            </div>
        </div>
    </div>
</div>
<!--Заголовок-->
<p class="lk_h1">Расписание репетиций</p>
<div style="color: white">
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
<!--Кнопка на создание-->
<a onclick="crph()"><div class="choose_rp" id="cr_ev">
    <p>Назначить репетицию</p>
</div></a>
<div class="create_form" id="cr_rh_form">
    <p class="lk_h1">Введите данные о репетиции</p>
    <form method="POST" action="newreh.php">
    <input type="text" name='typerh' placeholder="Тип репетиции">
    <input type="number" name = 'time' placeholder="Часы">
    <input type="date" name='datarh' placeholder="Дата и время">
    <input type="submit" value="СОЗДАТЬ" id="formbt">
    </form>
</div>
<script>
    function crph() {
        document.getElementById('cr_rh_form').style.display='inline'
    }
</script>
</body>
</html>