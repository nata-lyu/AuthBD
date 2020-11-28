<?php
try {
    $db = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_itstep27", 'host1323541_itstep', '269f43dc');

    // постоянное соединение с БД
    // $dbh = new PDO("mysql:host=mysql60.hostland.ru;dbname=host1323541_itstep27", 'host1323541_itstep', '269f43dc',
    // array(PDO::ATTR_PERSISTENT => true)); 

    // Параметры объекта PDO:
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // - способ обработки ошибок
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // - задает тип получаемого рез-та по умолчанию
    $db->exec("set names utf8");
    }
  catch(PDOException $e) {
      echo $e->getMessage();
    }
?>