<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function getCommonWords($a, $b){
  $i=0;
foreach($a as $value1)
 foreach($b as $value2){
  if($value1==$value2)
   $result[$i] = $value1;$i++;}
return $result;
}

if($_POST){
echo "Результат:<br>";
$text1 = array_unique(array_filter(explode(' ',$_POST['text1'])));
$text2 = array_unique(array_filter(explode(' ',$_POST['text2'])));
$result = getCommonWords($text1 , $text2);
echo "<pre>";
print_r($result);
echo "</pre>";}
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
 <p>Текст 2:</p>
 <p><textarea rows="10" cols="45" name="text2"></textarea></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
 </body>
</html>