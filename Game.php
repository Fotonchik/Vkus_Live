<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
<?php
include ('tpl/link.php');
?>
<style>
.panel {
display: inline-flex;
align-items: center;
justify-content: center;
border-radius: 20px;
background: radial-gradient(#98ED00, #C6F66F);
color: white;}
#question {
position:static;
height: 100px;
margin: 10px 10px;}
.panel--option {
margin: 5px 10px;
margin-left: 5%;
width: calc(50% - 20px);
height: 50px;}
.panel--option:active {
background: radial-gradient(red, yellow);}}
</style>
</head>
<body>
<?php
include ('tpl/header.php');
?>
<main class="flex">
<div class="container-fluid"><br>
<?php
include('dbconnect.php');
$label = 'id';
$id = false;
if (!empty($_GET[$label] ) ) {
$id = $_GET[$label];
}
$result=$mysqli->query("SELECT * FROM `cours` WHERE id = '$id'");
$myrow = $result->fetch_assoc();
$div = '<div id="row">';
$div .='<div class = "col">
<div class="tour">';
$id = $myrow[id];
$div.='<p>'.$myrow[programm].'</p>';
$div.='</div></div>';
$div.='</div>';
echo $div;
?>
<div id="container">
<div id="question" class="panel"></div>
</div>
<script src="Quest.js"></script>
<script src="Game.js"></script></div>
</main>
<?php
include ('tpl/footer.php');
?>
</body>
</html>
