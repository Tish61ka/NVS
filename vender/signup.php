<?php
    session_start();
    require_once 'connect.php';

    $FullName = $_POST['FullName'];
    $Login = $_POST['Login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $SecondPassword = $_POST['SecondPassword'];

if($password == $SecondPassword){
    $path = 'downloads/'. time() .$_FILES['name']['avatar'];
   if (move_uploaded_file($_FILES['avatar']['tmp_name'], '../'.$path)){
       $_SESSION['message'];
   }
   $connect->query("INSERT INTO `users` (`ID`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$FullName', '$Login', '$email', '$password', '$path');");
   header("Location: ../index.php");
}else{
    echo $_SESSION['message'] = 'Дурачок, пароли не совпадают';
    // header("Location: ../reg.php");
}
?>