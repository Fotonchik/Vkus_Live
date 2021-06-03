<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><?php
include ('tpl/link.php');
?>
</head>
<body>    
<?php
include ('tpl/header.php');
?>
<main class="flex">
<div class="row">
<div class="col">
</div>
</div>
<div class="container-fluid">
    <?php
include('dbconnect.php');
    $label = 'id';
    $id = false;
    if (!empty($_GET[$label] ) ) {
        $id = $_GET[$label];
    }
    
        
$result=$mysqli->query("SELECT * FROM `formula` WHERE id = '$id'");
$myrow = $result->fetch_assoc();
    
$div = '<div id="row">';
$div .='<div class = "col">
<div class="tour">';
    $id = $myrow[id];
        $div.='<img src = '.$myrow[photo].'>';
    $div.='<p>'.$myrow[name].'</p>';
    $div.='<p>'.$myrow[programm].'</p>';
    $div.='</div></div>';
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