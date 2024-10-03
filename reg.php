<?php
define('DB_HOST', 'std-mysql'); //Адрес
define('DB_USER', 'std_2707_lab5_data'); //Имя пользователя
define('DB_PASSWORD', 'epitih34'); //Пароль
define('DB_NAME', 'std_2707_lab5_data'); //Имя БД
$mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
$result = mysqli_query($mysql, "INSERT INTO users(login, password) VALUES('".$_POST['login']."', '".$_POST['pass']."')" );
?>