<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function stringRewrite($text1){
  $n = count($text1);
  $text1[$n-1] = substr($text1[$n-1], 0, strlen($text1[$n-1])-1);
  for($i=0,$j=$n-1;$i<$n;$i++,$j--)
    $new_text[$i]=$text1[$j];
  $result = implode('. ',$new_text) . '.';
  return $result;
}

if($_POST){
$text1 = array_filter(explode('. ',$_POST['text1']));
$result = stringRewrite($text1);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 12</title>
 </head>
 <body>
 <?php if(isset($result)) echo "<p>Результат преобразования: {$result}</p>";?>
 <form method="post">
 <p>Текст 1:</p>
 <p><textarea rows="10" cols="45" name="text1"></textarea></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
 </body>
</html>