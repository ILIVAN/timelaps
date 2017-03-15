<?php
function debugVar($var){
  echo "<pre>";
  print_r($var);
  echo "</pre>";
}
if($_POST){
  $dir = $_POST['dir'];
  $word = $_POST['word'];
  if(null !== scandir($dir)){
    $list = scandir($dir);
    $list_none_enc = scandir($dir);
    foreach ($list as $key => &$value){
      $value = iconv("cp1251", "utf-8", $value);
      if(!stristr($value, '.txt'))
       {$value = '';
        $list_none_enc[$key] = '';}}
    $list = array_filter($list);
    $list_none_enc = array_filter($list_none_enc);
    foreach ($list as $key => &$value)
     if(!stristr(file_get_contents($list_none_enc[$key]), $word))
      $value = '';
    $list = array_filter($list);
  }
 if(isset($list)) {
  echo "В указанной директории искомое слово обнаружено в следующих файлах:" . PHP_EOL;
  debugVar($list);}
}
else
 echo "Сканирование не удалось!";

?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 5</title>
 </head>
 <body>
 <form method="post">
 <p>Укажите директорию для сканирования содержимого:</p>
 <p><input name="dir" type="text"></p>
 <p>Укажите искомое слово:</p>
 <p><input name="word" type="text"></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
 </body>
</html>