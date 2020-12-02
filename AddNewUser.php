<?php 
require_once 'connectPDO.php';
include 'main.php'; // подключается для использования ф-ии printBD

// добавляем данные нового польз-ля в БД
$user = $_POST['username'];
$pass = $_POST['password'];

// вставляем новые данные в БД
$db->query("INSERT INTO MyAuth (username, password) VALUES ('$user', '$pass')");

// запрашиваем в массив $rows данные БД после добавления нов. зн-ия
require_once 'connectPDO.php';
$stmt = $db->query('SELECT * from MyAuth');
$rows = $stmt->fetchAll();  
header('Location: index.php/');
printBD($rows);
?>