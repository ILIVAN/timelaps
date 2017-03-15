<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";}
  //setcookie("page_counter", "", time() - 3600);
if($_POST){
  if(!isset($_COOKIE['update_time'])){
    setcookie('update_time', time(), time()+60);
    setcookie('update_counter', 0, time());
    $_COOKIE['update_counter'] = 0;
    echo "I'm here!<br>";}

  $update_counter = $_COOKIE['update_counter'];
  if($update_counter < 3)
    {$update_counter++;
     setcookie('update_counter', $update_counter);
     echo "Форма отправлена!";
     }
  else
    echo "Форма НЕ отправлена! Превышено допустимое количество попыток отправки формы в минуту!";
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 1</title>
 </head>
 <body>
 <form method="post">
 <p>Текст 1:</p>
 <p><textarea rows="10" cols="45" name="text1"></textarea></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
<?php echo "<pre>";var_dump($_COOKIE);?>
 </body>
</html>