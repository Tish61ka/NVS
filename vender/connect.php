<?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'registr');
    if(!$connect){
        die('Ошибка подключения к БД');
    }