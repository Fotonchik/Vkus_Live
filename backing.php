<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php
include ('tpl/link.php');
    ?>
    <style>
      .carousel {
  max-height: 500px ;
  overflow: hidden;margin-left:20%;
}
.carousel-inner {
  overflow: visible;
}
.carousel-inner img {
  max-width: 80% !important;
  max-height: 80% !important;
}
    </style>
    
</head>
<body>
    
    <?php
include ('tpl/header.php');
    ?>
<main class="flex">
<div class="row">
<div class="col">
    <h4>Выпечка</h4>
    </div>
</div>
<div class="container-fluid">
    
    
    
    
    
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li class="active" data-target="#carouselExample" data-slide-to="0"></li>
      <li  data-target="#carouselExample" data-slide-to="1"></li>
      <li  data-target="#carouselExample" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/baking/moon2.jpg" class="d-block w-100">
        
      </div>
        <div class="carousel-item">
        <img src="img/baking/frog.jpg" class="d-block w-100">
        
      </div>
        <div class="carousel-item">
        <img src="img/baking/cub.jpg" class="d-block w-100">
        
      </div>
    </div>
  </div>
    
    
    
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
$div .='<div class = "col" >
<div class="tour">';

    $id = $myrow[id];
    
    
    
    $div.='<p>'.$myrow[programm].'</p>';
    $div.='</div></div>';
    $div.='</div>';
    echo $div;
    ?>
    
    
    <br>
    <?php
include('dbconnect.php');
$result=$mysqli->query("SELECT * FROM `formula`  WHERE id IN(1,2,6) ");
$div = "<div id='row'>";
$k = 1;
while($myrow = $result->fetch_assoc()){
$div .='<div class = "col">
<div class="tour" style="width: 30%;">';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = formula.php?id=$myrow[id]>".$myrow[name].'</a></p>';
     
    $div.='</div></div>';
    $k++;
}
    $div.='</div>';
    echo $div;
    ?>
    

</div>
</main>
    <?php
    include ('tpl/footer.php');
    ?>
</body>
</html>
    
    

