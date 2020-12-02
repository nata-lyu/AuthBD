<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Работа с БД</title>
  <link rel="stylesheet" href="style.css">
  <script type='text/javascript' src='VisibleScript.js'></script> 
  <script src="http://code.jquery.com/jquery-latest.js"></script>
 </head>
 <body>
    <h2>Перед вами данные таблицы MyAuth, загруженные с сервера</h2>
    <div id='myDiv' name='myDiv'>
    <?php
        include 'main.php';
    ?>
    </div>

    <form>
        <input value="Добавить нового пользователя" type="button" onclick='Visible()' id="newUser" name="newUser">
    </form>

    <form name='addNewForm' id='addNewForm' method="POST">
        <fieldset name="userFields" id="userFields" style='display:none'>
          <legend>Введите данные нового пользователя</legend>
          <p><label for="username">Логин:  </label>
             <input type="text" id="username" name='username' autofocus required></p>
          <p><label for="password">Пароль:</label>
             <input type="password" id="password" name='password' required></p>
          <p><input value="Записать данные нового пользователя в БД" type="button" id="addNewBtn" name="addNewBtn"></p>
        </fieldset>
    </form>

    <script>
        $(document).ready(function() {
           $('#addNewBtn').click(function () {  
            var user = $.trim($('#username').val());
            var pass = $.trim($('#password').val());
            $.ajax({  
                  type: "POST",  
                  url: "AddNewUser.php",  
                  data: { username: user,
                          password: pass
                  },          
                  success: function(data){  
                         $('#myDiv').empty();
                         //$('#myDiv').text('С сервера пришло:' + $.type(data));  
                         $( "#myDiv" ).html('<p>С сервера пришло:</p>' + data);// "<span class='red'>Hello <b>Again</b></span>" );
                    },
                  error: function(req, text, error) {
                    alert('Ошибка AJAX: ' + text + ' | ' + error);
                    },
                });  
              return false;  
          });  
        });  
                
    </script>

    </body>
</html>