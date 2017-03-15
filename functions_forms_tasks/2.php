<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function getTop3($a){
  foreach($a as $key => $value)
  $length[$key] = strlen($value);
  arsort($length);
  $i=0;
  foreach($length as $key => $value)
    {$top_3[$i] = $a[$key];
     $i++;
     if($i==3) break;}
  return $top_3;
}

if($_POST){
echo "Результат:<br>";
$text1 = array_filter(explode(' ',$_POST['text1']));
$result = getTop3($text1);
debugVar($result);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 2</title>
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