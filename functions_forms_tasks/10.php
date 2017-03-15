<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function uniqueWordsNumber($text1){
  $unique_arr = [];
foreach ($text1 as $key1 => $value1){
  $unique = 0;
  foreach ($text1 as $key2 => $value2) {
    if($value1==$value2)
      $unique++;
  }
  if($unique==1)
   array_push($unique_arr, $value1);
}
$number = count($unique_arr);
return $number;
}


if($_POST){
echo "Количетсво уникальных слов в тексте:<br>";
$text1 = array_filter(explode(' ',$_POST['text1']));
$number = uniqueWordsNumber($text1);
echo $number;
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 10</title>
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