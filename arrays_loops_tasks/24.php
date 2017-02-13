<?php
$x = (boolean) $_POST;
if($x==1){

 if($_POST["number"]!="")
  if(isset($_POST["digit"])){
    $digit = (int) $_POST["digit"];
    $array = str_split($_POST["number"]);
    $count = 0;
    foreach ($array as $key => $value)
     if($value == $digit)
      $count++;
    echo "Цифра {$digit} " . ($count>0 ? "встречается {$count} раз" : "не встречается в числе");}
  else
   echo "Цифра не выбрана!";
 else
  echo "Число не введено!";
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 24</title>
 </head>
 <body>
 <form method="post">
 <p>Выберите цифру:</p>
 <p><input type="radio" name="digit" value="1">1<input type="radio" name="digit" value="2">2<input type="radio" name="digit" value="3">3<input type="radio" name="digit" value="4">4<input type="radio" name="digit" value="5">5<input type="radio" name="digit" value="6">6<input type="radio" name="digit" value="7">7<input type="radio" name="digit" value="8">8<input type="radio" name="digit" value="9">9</p>
 <p>Введите число<input name="number" type="number"></p>
 <p><input type="submit" /></p>
</form>

 </body>
</html>