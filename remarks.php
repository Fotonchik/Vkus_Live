<?php
session_start();
?>
<html>
<head>
    
<?php
include ('tpl/link.php');
?>


<link href = "css/style.css" rel = "stylesheet" type="text/css">
</head>
<body class = "body-top">

<?php
include ('tpl/header.php');
?>

<h2>Оставьте свой отзыв</h2>
<form action = "save_remarks.php" method = "post">
<p>
<label>Тема сообщения<br></label>
<textarea name = "tema" cols = "38" rows = "3"></textarea>
</p>
<p>
<label>Введите текст сообщения<br></label>
<textarea name = "text" cols = "38" rows = "6"></textarea>
</p>
<p>
<input class="button" type = "submit" name = "submit" value = "Сохранить">
</p>
    </form>    
    <?php
    include ('tpl/footer.php');
    ?>
    </body></html>