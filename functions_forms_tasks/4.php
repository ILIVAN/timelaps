<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

if($_POST){
 $dir = $_POST['dir'];
if(null !== scandir($dir))
 var_dump(scandir($dir));
else
 echo "Сканирование не удалось!";
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 4</title>
 </head>
 <body>
 <form method="post">
 <p>Укажите директорию для сканирования содержимого:</p>
 <p><input name="dir" type="text"></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
 </body>
</html>