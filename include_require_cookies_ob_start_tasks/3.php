<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";}
  //setcookie("page_counter", "", time() - 3600);
if($_POST){
  setcookie('color', $_POST['color']);
  $_COOKIE['color'] = $_POST['color'];
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 3</title>
  <style type="text/css">
   div {
    color: <?php echo $_COOKIE['color'];?>;
   }
  </style>
 </head>
 <body>
 <form method="post">
 <div>Lorem Ipsum</div>
 <select name="color">
    <option <?php if($_COOKIE['color']=='brown') echo 'selected';?> value="brown">Коричневый</option>
    <option <?php if($_COOKIE['color']=='yellow') echo 'selected';?> value="yellow">Желтый</option>
    <option <?php if($_COOKIE['color']=='red') echo 'selected';?> value="red">Красный</option>
    <option <?php if($_COOKIE['color']=='green') echo 'selected';?> value="green">Зеленый</option>
    <option <?php if($_COOKIE['color']=='blue') echo 'selected';?> value="blue">Синий</option>
 </select>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
<?php echo "<pre>";var_dump($_COOKIE);?>
 </body>
</html>