<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Работа с БД</title>
  <link rel="stylesheet" href="style.css">
  <script type='text/javascript' src='VisibleScript.js'></script> 
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type='text/javascript' src='ajax.js'></script>
 </head>
 <body>
    <h2>Перед вами данные таблицы MyAuth, загруженные с сервера</h2>
    <?php
        include 'main.php';
    ?>
    <form>
        <input value="Добавить нового пользователя" type="button" onclick='Visible()' id="newUser" name="newUser">
    </form>
    <form action='AddNewUser.php' name='addNewUser' method="POST">
        <fieldset name="userFields" id="userFields" style='display:none'>
          <legend>Введите данные нового пользователя</legend>
          <p><label for="username">Логин:  </label>
             <input type="text" id="username" name='username' autofocus required></p>
          <p><label for="password">Пароль:</label>
             <input type="password" id="password" name='password' required></p>
          <p><input value="Записать данные нового пользователя в БД" type="submit" id="addNewBtn" name="addNewBtn"></p>
        </fieldset>
    </form>
    </body>
</html>