<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
function textFilter($text,$max){
  $text2 = array_filter(explode(' ',$text));
  $i=0;
  foreach($text2 as $key => $value){
    $length[$key] = iconv_strlen($value,'utf-8');
      if($length[$key] <= $max)
        {$result[$i] = $text2[$key];$i++;}
  }
  $string_to_file = implode(' ', $result);
  return $string_to_file;
}

$text = file_get_contents('text_file.txt');
if($_POST){
$max_length = $_POST['number'];
$string = textFilter($text, $max_length);
if(file_put_contents('text_file.txt', $string))
 {echo "Файл перезаписан!";$text = file_get_contents('text_file.txt');}
}
?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 3</title>
 </head>
 <body>
 <p>Содержимое файла: <?=$text?></p>
 <form method="post">
 <p>Удалить в файле слова, длина которых больше:</p>
 <p>Введите число<input name="number" type="number"></p>
 <p><input type="submit" /></p>
</form>
<?php echo "<pre>";var_dump($_POST);?>
 </body>
</html>