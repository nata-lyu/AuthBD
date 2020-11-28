<?php
require_once 'connectPDO.php';
// добавляем данные нового польз-ля в БД
$user = $_POST['username'];
$pass = $_POST['password'];

echo $user.".".$pass;
$db->query("INSERT INTO MyAuth (username, password) VALUES ('$user', '$pass')");


//$query = "INSERT INTO MyAuth (username, password) VALUES ('$user', '$pass')";
/*if (mysqli_query($link, $query) == false) {
   die(mysqli_error($link));
   }*/
?> 