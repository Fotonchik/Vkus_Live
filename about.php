<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
<?php
include ('tpl/link.php');
    ?>
    </head>
    <body class = "body-top">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
include ('tpl/header.php');
    ?>
        
        
<div id = "main">

    <h1>Контактная информация</h1>
<h3>Как связаться с нами?</h3>
<br>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A97d515ec7cfb171f45d223a4a7dcb0443dcd57000996c726c2367d34470d1fbd&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script><b>Юридический и фактический адрес</b><br>
Россия, г.Химки ул. Репина, 3<br>

    <div id="ico">
    
<ul class="socialIcons">
<li><a href="#" class="googlePlus"><i class="fa fa-google-plus"></i></a></li>
VkysLive@gmail.com<br>
<li><a href="#" class="mail"><i class="fa fa-envelope-square"></i></a>VkysLive@mail.ru</li><br>
<li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>+7(995)-755-99-99<br>
<li><a href="#" class="vk"><i class="fa fa-vk"></i></a></li>vk.com/VkysLive
        </ul></div>

Вы можете связаться с понедельника по субботу - с 8 до 17 часов
<p>Ваши отзывы:</p>
<!-- Начало таблицы -->
<?php
include("dbconnect.php");
$result = $mysqli->query("SELECT * FROM remarks");
    
$table = "<table id = 'form' class='table table-success table-striped'>";
$k = 1;
while ($myrow = $result->fetch_assoc()) {
    $table.="<tbody>";
$table.="<tr>";
    $temp=$myrow['ID_user'];
$hum = $mysqli->query("SELECT * FROM users WHERE ID=$temp");
    $hum=$hum->fetch_assoc();
$table.="<td>".$hum['Name']."</td>";
$table.="<td>".$myrow['tema']."</td>";
$table.="<td>".$myrow['text']."</td>";
$table.="</tr>";
$k++;
}
$table.="</table>";
echo $table;
?>
</div>

    <?php
    include ('tpl/footer.php');
    ?>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>