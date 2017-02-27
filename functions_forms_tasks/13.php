<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function howManyTimes($text1){
  $unique_arr = array_unique($text1);
  $number = [];
foreach ($unique_arr as $key1 => $value1){
  $present = 0;
  foreach ($text1 as $key2 => $value2) {
    if($value1==$value2)
      $present++;
  }
  array_push($number, $present);
}
arsort($number);
$unique_arr = array_values($unique_arr);
foreach ($number as $key => $value) {
  echo $unique_arr[$key] . " -- " . $value . "<br>";
}
return $number;
}


if($_POST){
echo "Как часто встречаются слова в тексте:<br>";
$text1 = array_filter(explode(' ',$_POST['text1']));
$number = howManyTimes($text1);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 13</title>
 </head>
 <body>
 <form method="post">
 <p>Текст 1:</p>
 <p><textarea rows="10" cols="45" name="text1"></textarea></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
 </body>
</html>