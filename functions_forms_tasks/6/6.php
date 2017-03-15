<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
$table_visible = 'none';
if($_FILES){
 $uploaddir = 'galary/';
 $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
 file_put_contents('rows.txt', $uploadfile . PHP_EOL, FILE_APPEND);
 $files = file_get_contents('rows.txt');
 $files = array_filter(explode(PHP_EOL, $files));
 if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
    {echo "Файл корректен и был успешно загружен.\n";$table_visible = 'table';}
 else
    echo "Возможная атака с помощью файловой загрузки!\n";
 }
else
 {
  $handle = fopen("rows.txt", "w");
  fclose($handle);}

?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 6</title>
 </head>
 <body>
  <table border="1" style="display:<?=$table_visible?>;">
  <?php if($table_visible == 'table')
           for($i=0,$n=1;$i<$n;$i++){
            $out = $files[$i];
            if($i % 4 == 0)
              echo "<tr>";
   echo "<td><img src='$out' width='300'></td>";
            if($i % 4 == 3)
              echo "</tr>";
   if(isset($files[$i+1]))
    $n++;
 }
  ?>
  </table>

 <form enctype="multipart/form-data" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
 </form>

<?php echo "<pre>";var_dump($_FILES);?>
 </body>
</html>