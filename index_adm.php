<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Расписание</title>
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
        <p id='logotext'>ЛИЧНЫЙ КАБИНЕТ<br>АДМИНА</p>
        <div class="dropdown">
            <button class="dropbtn"><a href=index_adm.html"><img src='timetable.svg' width="20px" id='actor'> </a>
            </button>
            <div class="dropdown-content">
                <a href="index_adm.php">РАСПИСАНИЕ</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"> <a href="report.html"> <img src='report.svg' width="20px" id='camera'></a>
            </button>
            <div class="dropdown-content">
                <a href="report.html">ОТЧЁТЫ</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn"><a href="events.php"><img src='events.svg' width="20px" id='call'> </a>
            </button>
            <div class="dropdown-content">
                <a href="events.php">МЕРОПРИЯТИЯ</a>
            </div>
        </div>
    </div>
</div>

<!--Кнопка на создание-->
<a onclick="crph()"><div class="choose_rp" id="cr_ev">
    <p>Назначить репетицию</p>
</div></a>
<div class="create_form" id="cr_rh_form">
    <p class="lk_h1">Введите данные о репетиции</p>
    <form method="POST" action="newreh.php">
    <input type="text" name='type' placeholder="Тип репетиции">
    <input type="number" name = 'time' placeholder="Часы">
    <input type="date" name='datetime' placeholder="Дата">
    <input type="submit" value="СОЗДАТЬ" id="formbt">
    </form>
</div>
<script>
    function crph() {
        document.getElementById('cr_rh_form').style.display='inline'
    }
</script>
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
    ?>
    <table border="1"  width="800px">
        <tr><td>Дата</td><td>Репетиция</td>
        </tr>
        <?php
        $query = "SELECT * FROM `rehearsal` ";
        $res		= mysqli_query($db, $query);
        while($mass = mysqli_fetch_array($res))
        {
            $id=$mass['datarh'];
            $login=$mass['typerh'];

            echo '<tr><td>'.$id.'</td><td>'.$login.'</td>';


        }

        ?>
</div>
</body>

</html>