<?php
// здесь происходит подключение к БД и вывод на экран всего содержимого
require_once 'connectBD.php';
 
// Посылаем серверу запрос выборки всех элементов
if ($result = mysqli_query($link, "SELECT * FROM MyAuth", MYSQLI_USE_RESULT))
  {
     echo "А вот и все наши пользователи: <br>"; 
   }
else die(mysqli_error($link));

// выводим на экран данные БД, полученные при запросе 
echo '<table id="tableBD" border="1px" cellpadding="5px" align="center" width="40%">';
while($row = mysqli_fetch_assoc($result)) { 
    echo '<tr>';
    echo '<td>'.$row['id'];
    echo '<td>'.$row['username'];
    echo '<td>'.$row['password'];
    echo '</tr>';
} 
echo '</table>';

?>