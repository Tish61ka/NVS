<?php 
session_start();
if($_SESSION['user']){
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="/acept/main.css">
<title>Регистрация</title>
</head>
<body>
<form  action="/vender/signup.php" method="post" enctype="multipart/form-data">
<label for="a" class="Full">ФИО</label>
<input type="text" name="FullName" placeholder="Введите свое полное имя" id="a">
<label for="">Логин</label>
<input type="text" name="Login" placeholder="Введите логин">
<label for="">Почта</label>
<input type="email" required name="email" placeholder="Введите свой email" id="">

<label for="">Прикрепите изображение профиля</label>
<input type="file" name="avatar" id="">

<label for="">Пароль</label>
<input type="password" required name="password" placeholder="Введите пароль" id="">
<label for="">Подтверждение пароля</label>
<input type="password" required name="SecondPassword" placeholder="Подтвердите пароль" id="">
<button type="submit">Зарегестрироваться</button>
<p>
    Уже есть аккаунт? <a href="/index.php">Войти</a>
</p>
<?php
    if( $_SESSION['message']){
        echo '<p class="msg">'. $_SESSION['message']. '</p>';
    }
    unset($_SESSION['message']);
?>
</form>
</body>
</html>