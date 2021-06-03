<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
<?php
include ('tpl/link.php');
    ?></head>
    <body class = "body-top" >

        
    <?php
include ('tpl/header.php');
    ?>
        
        
        
        
<main class = "flex align-content-stretch flex-wrap">
<div class = "row">
<div class = "col">
<h1>Пройти курс:</h1>
</div>
</div>

    <div class="container-fluid" >
    <?php
include('dbconnect.php');
$result=$mysqli->query("SELECT * FROM `cours`");
$div = "<div align='center' id='row'>";
$myrow = $result->fetch_assoc();
$div .='<div class = "col">
<div  class="tour">';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = hot.php?id=1>".$myrow[name].'</a></p>';
    $div.='</div></div>';
        
$myrow = $result->fetch_assoc();
$div .='<div class = "col">
<div  class="tour">';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = backing.php?id=2>".$myrow[name].'</a></p>';
    $div.='</div></div>';
   
$myrow = $result->fetch_assoc();
    $div .='<div class = "col">
<div class="tour" >';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = salads.php?id=3>".$myrow[name].'</a></p>';
    $div.='</div></div>';
        
        
    
        
$myrow = $result->fetch_assoc();
    $div .='<div class = "col">
<div class="tour" ">';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = resept.php?id=4>".$myrow[name].'</a></p>';
    $div.='</div></div>';

        
        
$myrow = $result->fetch_assoc();
    $div .='<div class = "col">
<div class="tour" margin-bottom:40px;">';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = game.php?id=5>".$myrow[name].'</a></p>';
    $div.='</div></div>';

        
        
        
        
$myrow = $result->fetch_assoc();
    $div .='<div class = "col">
<div class="tour" margin-bottom:40px;">';

    
    
    $div.='<img src = '.$myrow[photo].'>';
    $div.="<p><a href = card.php?id=6>".$myrow[name].'</a></p>';
    $div.='</div></div>';

        
        
        
        
        
    $div.='</div>';
    echo $div;
    ?>
</div>
      
   
   
</main>
    <?php
    include ('tpl/footer.php');
    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    </body>
</html>

