<!DOCTYPE html>
<html>
<head>
 
<meta charset="utf-8">
<meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">
<link rel = "stylesheet" href = "css/bootstrap.min.css" >
<link rel = "stylesheet" href = "../css/style.css" >
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Вкус жизни</title>
</head>
<body class = "body-top">
<div id = "content">
    <header class ="container">
<div class = "row">
<!-- Внутри горизонтальной области опред шириной 3/12 -->
<div class ="col-3">
<!-- Внутри выводим логотип -->
<img id = "logo" src = "img/makaroni.jpg">
</div>
<!-- Внутри горизонтальной области опред колонку, шириной 9/12 -->
<div class = "col-9">
<h1>Вкус жизни!</h1>
</div>
</div>
<div id = "menu">
<nav class = "nav nav-pills flex-column flex-sm-row">
<a class = "flex-sm-fill text-sm-center nav-link" href = "home.php">Главная</a>
<a class = "flex-sm-fill text-sm-center nav-link" href = "course.php">Наши курсы </a>
<a class = "flex-sm-fill text-sm-center nav-link" href = "about.php">0 нас    </a>

<div id="right" align=right >
<?php 
if (empty($_SESSION['login']) or empty($_SESSION['id'])){
?>


<div id ="auth_block">
<div id = "link_register">
<a href = "registr.php">Регистрация</a>
</div>
<div id = "link_auth">
<a href = "avtor.php">Авторизация</a>
</div>
</div>
    
<?php }
else{
?>
<div id = "exit_block">
<div id = "link_remark">
<a href = "remarks.php">Вы можете оставить отзыв</a>
</div>
<div id = "link_exit">
<a href = "exit.php">Выход</a>
</div>
</div>
<?php }
?>
</div>
</nav>
</div>
</header>
</div>
</body>
</html>