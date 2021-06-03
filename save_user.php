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
<div class = "col"><?php
if (isset($_POST['name'])) {
$name = $_POST['name'];
if ($name == "") {
unset($name);
}
}
if (isset($_POST['login'])) {
$login = $_POST['login'];
if ($login == "") {
unset($login);
}
}
if (isset($_POST['pass'])) {
$pass = $_POST['pass'];
if ($pass == "") {
unset($pass);
}
}
if (empty($login) or empty($pass))
{
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");}
include ("dbconnect.php");
$result = $mysqli->query("SELECT ID FROM users WHERE login = '$login' ");
$myrow = $result->fetch_assoc();
if (!empty($myrow['ID'])) {
exit ("Введенный вами логин уже зарегистрирован. Введите другой логин. ");
}
    $result2 = $mysqli->query ("INSERT INTO users (Name, Login, Pass) VALUES('$name','$login','$pass')");
if ($result2 == 'TRUE') {
echo 'Вы успешно зарегистрированы! Теперь вы можете зайти
на сайт под своим именем. <a href = "home.php
">Главная страница</a>';
}
else {
echo "Ошибка! Вы не зарегистрированы.";
}
    $human= "Name";
    ?>
     
</div>
</div>
    
</main>
        
        
    <?php
    include ('tpl/footer.php');
    ?>
    
       
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
