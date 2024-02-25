<?php 
  
  $server = 'localhost'; // Имя или адрес сервера
  $user =  '046351469_kolos';// Имя пользователя БД
  $password =  '046351469_Qwerty';// Пароль пользователя
  $db = 'burnfeniks_kolosok'; // Название БД
  
  // connect to mysql 
    
  $connect = mysqli_connect($server, $user, $password, $db) or die("Sorry, can't connect to the mysql."); 
    
  // select the db 
    
//   mysqli_select_db($connect, $db) or die("Sorry, can't select the database."); 

?>