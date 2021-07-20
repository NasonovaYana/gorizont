<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
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
<p class="lk_h1">Обратная связь по репетициям </p>
<div class="fb_form" >
    <form method="POST" id="crfbrhform" action="newfbrh.php">
    <input type="date" name = 'rhdata' placeholder="Дата и время репетиции">
    <input type="number" name='markrh' placeholder="Оценка">
    <input type="number" name='timerh' placeholder="Часы">
    <input type="text" name='actors' placeholder="Актёры">
    <input type="text" name='note' placeholder="Комментарий">
    <input type="submit" value="ОТПРАВИТЬ" id="feedbackmbt">
    </form>
</div>
</body>
</html>