<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
mb_internal_encoding("UTF-8");
function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}
function toUpperCase($text1){
  foreach ($text1 as &$value)
   $value = mb_ucfirst($value);

  $result = implode('. ',$text1);
  return $result;
}

if($_POST){
$text1 = array_filter(explode('. ',$_POST['text1']));
$result = toUpperCase($text1);
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 11</title>
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