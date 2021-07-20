<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мероприятия</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="lk.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


</head>
<body>
<!--Навигация-->
<div class="navbar-header">
    <div class="navbar">
        <img src="logotype.png" id='logo' width="13.5%">
        <p id='logotext'>ЛИЧНЫЙ КАБИНЕТ<br>АДМИНА</p>
        <div class="dropdown">
            <button class="dropbtn"><a href=index_adm.php><img src='timetable.svg' width="20px" id='actor'> </a>
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

<!--Заголовок-->
<p class="lk_h1">Обратная связь по мероприятиям </p>
<div class="fb_form">
    <form method="POST"  action="newfbev.php">
    <input type="text" name = 'nameev' placeholder="Мероприятие">
    <input type="text" name='actors' placeholder="Актёры">
    <input type="text" name='role' placeholder="Роль">
    <input type="number" name='markev' placeholder="Оценка">
    <input type="submit" value="ОТПРАВИТЬ" class="feedbackevbt">
    </form>

</div>

<!--Кнопка на создание-->
<div onclick="crev()" class="choose_rp" id="cr_ev">
    <p>Создать мероприятие</p>
</div>
<!--Форма создания и скрипт на появление-->
<div class="create_form" id="cr_ev_form">
    <form method="POST" id="crevform" action="newevent.php">
    <p class="lk_h1">Введите данные о мероприятии</p>
    <input type="text" name='evname' placeholder="Название">
        <input type="date" name='date' placeholder="Дата и время">
    <input type="text" name = 'place' placeholder="Площадка">
    <input type="text" name='actor' placeholder="Актёр">
    <input type="submit" value="СОЗДАТЬ" id="formbt">
        <p></p>
    </form>
    </div>

<script>
    function crev() {
        document.getElementById('cr_ev_form').style.display='inline'
    }
</script>
<!--Заголовок-->
<div>
    <p class="lk_h1">Ближайшие мероприятия</p>
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
            <tr><td>Мероприятие</td><td>Дата</td>
                <td>Площадка</td></tr>
            <?php
            $query = "SELECT * FROM `events` ";
            $res		= mysqli_query($db, $query);
            while($mass = mysqli_fetch_array($res))
            {
                $id=$mass['evname'];
                $login=$mass['date'];
                $mail=$mass['place'];


                echo '<tr><td>'.$id.'</td><td>'.$login.'</td>';
                echo '<td>'.$mail.'</td></tr>';

            }

            ?>
    </div> </div>
</body>
</html>