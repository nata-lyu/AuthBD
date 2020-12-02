<?php
// здесь происходит подключение к БД и вывод на экран всего содержимого
require_once 'connectPDO.php';
 
// Посылаем серверу запрос выборки всех элементов
$stmt = $db->query('SELECT * from MyAuth');
$rows = $stmt->fetchAll();

function printBD($records) {
  echo '<table id="tableBD" border="1px" cellpadding="5px" align="center" width="40%">';
  foreach($records as $row)
  {
    echo '<tr>';
    echo '<td>'.$row['id'];
    echo '<td>'.$row['username'];
    echo '<td>'.$row['password'];
    echo '</tr>';
  }
  echo '</table>';
}

// выводим на экран данные БД в виде таблицы
printBD($rows);

//public function disconnect() {
//  $this->$db = null;
//}
//$db->disconnect();
?>