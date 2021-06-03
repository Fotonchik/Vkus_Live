<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
include ('tpl/link.php');
    ?>
       
</head>
    <body class = "body-top">

    <?php
include ('tpl/header.php');
    ?>
<main class = "flex">
<div class = "row">
<div class = "col">

<h3><p>Познакомьтесь с кухней мира, проходя курсы и закрепляя полученные знания тестированием</p></h3>
    <h5><p>Мы предоставляем следующие услуги:</p></h5>
     <div id="ico">
<ul class="socialIcons">
<li><a href="course.php" class="pong"><i class="fi-rr-following"></i></a></li>

<p>Бесплатный доступ к курсам:</p>
<p>Наша миссия -сделать блюда мира доступными для каждого</p>
    <br>
    <li><a href="game.php?id=5" class="pong">
    <i class="fi-rr-ping-pong"></i></a></li>
<p>Тестирование:</p>
<p>Время показало, что использование такой тестовой системы контроля знаний является довольно успешным инструментом при обучении и проверки квалификационных навыков</p>
    <br>
     <li><a href="card.php?id=6" class="pong">
    <i class="fi-rr-browser"></i></a></li>

<p>Обучение по системе Лейтнера:</p>
<p>Система Лейтнера — это метод для эффективного запоминания и повторения изучаемого материала с использованием флэш-карточек, основанный на интервальных повторениях.</p>
    <br>
    
    
</ul>
    
    </div>

<div class="button"><a href="course.php">Начать обучение</a></div>
    
    
</div>
</div>
    
</main>
        
        
    <?php
    include ('tpl/footer.php');
    ?>
    
       
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>

