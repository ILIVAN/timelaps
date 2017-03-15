<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
$bad_words_voc = ['бан', 'мат', 'флуд'];
$is_visible = 'style="display:none;"';
if($_POST){
  if(!$_POST['text'])
    echo "Комментарий не отправлен! В текстовом поле пусто!" . PHP_EOL;
  else
    { $flag = 0;
      foreach ($bad_words_voc as $value)
       if(mb_stristr($_POST['text'], $value))
        $flag = 1;
      if($flag)
        echo "Комментарий не может быть сохранен, т.к. использовано запрещенное слово!<br>";
      else
       {if(!$_POST['name'])
         $name = 'Аноним';
        else
         $name = $_POST['name'];
         file_put_contents('comments.txt', $name . "--->" .  strip_tags($_POST['text']) . PHP_EOL, FILE_APPEND);
         $files = file_get_contents('comments.txt');
         $files = array_filter(explode(PHP_EOL, $files));
         $result = [];
         foreach ($files as $key => $value)
          $result[$key] = explode("--->", $value);
         $is_visible = '';
       }
    }
  }
else
 {
  echo "Оставьте хотя бы один комментарий" . PHP_EOL;}

?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 8</title>
 </head>
 <body>
  <div>
  <?php
      echo "Вы не можете использовать следующие слова:<br>";
      foreach ($bad_words_voc as $value) {
        echo $value . " ";
      }
  ?>
  </div>
  <div <?=$is_visible?>>
  <?php if($is_visible == '')
      foreach ($result as $value) {
        echo "<br><strong>$value[0]</strong>" . ' написал:<br><p>' . $value[1] . '</p>';
      }
  ?>
  </div>

 <form method="POST">
    <p>Ваше имя:<input name="name" type="text"></p>
    <p>Оставить комментарий:</p>
    <p><textarea rows="10" cols="45" name="text"></textarea></p>
    <input type="submit" value="Отправить" />
 </form>

<?php echo "<pre>";var_dump($_POST);?>
<?php echo "<pre>";var_dump($result);?>
<?php echo "<pre>";var_dump($bad_words_voc);?>
 </body>
</html>