<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function stringViseVersa($a){
$length = iconv_strlen($a,'utf-8');
for($i=0,$j=$length-1;$i<$length;$i++,$j--){
  $new_text[$i]=$a[$j];
}
$result = implode($new_text);
return $result;
}

if($_POST){
echo "Результат:<br>";
$result = stringViseVersa($_POST['text1']);
debugVar($result);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 9</title>
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