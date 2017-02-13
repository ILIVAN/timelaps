<?php
if(isset($_POST["number"])) {
$array = str_split($_POST["number"]);
$sum = 0;
foreach ($array as $key => $value){
  $sum+=$value;
}
echo "Сумма цифр введенного числа равна " . $sum;
unset($_POST["number"]);
}

?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 23</title>
 </head>
 <body>
 <form method="post">
 <p>Введите число<input name="number" type="number"></p>
 <p><input type="submit" /></p>
</form>

 </body>
</html>