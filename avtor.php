<html>
<head>
<title>Авторизация</title><?php
include ('tpl/link.php');
    ?>
</head>
<body>
    <?php
include ('tpl/header.php');
    ?>
<h2>Авторизация</h2>
<form action = "test_user.php" method = "post">
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
<input class="button"  type = "submit" name = "submit" value = "Войти">
</p>
</form>
    <?php
include ('tpl/footer.php');
    ?>
</body>
</html>