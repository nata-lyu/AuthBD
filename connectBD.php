<?php
$link = mysqli_connect("mysql60.hostland.ru", "host1323541_itstep", "269f43dc", 'host1323541_itstep27');

// результат соединения с БД:
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    exit;
}
else {
    mysqli_set_charset($link, "utf8");
} 
?>