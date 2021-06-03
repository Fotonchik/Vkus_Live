<html>
<head><?php
include ('tpl/link.php');
    ?>
<title>Регистрация</title>
</head>
<body>
    
    <?php
include ('tpl/header.php');
    ?>
    <main class = "flex">
<h2>Регистрация</h2>
<form action = "save_user.php" method = "post">
<p>
<label>Ваше имя:<br></label>
<input name = "name" type = "text" size = "15" maxlength =
"15">
</p>
<p>
<label>Ваш логин:<br></label>
    <input name = "login" type = "text" size = "15" maxlength = "15">
</p>
<p>
<label>Ваш пароль: <br></label>
<input name = "pass" type = "password" size = "15"
maxlength = "15">
</p>
<p>
<input class="button"  type = "submit" name = "submit" value = "Зарегистрироваться">
</p>
</form></main>
    
    <?php
include ('tpl/footer.php');
    ?>
</body>
</html>