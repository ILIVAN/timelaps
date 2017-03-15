<?php
function debugVar($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}
$is_visible = 'style="display:none;"';
if($_POST){
  if(!$_POST['text'])
    echo "Комментарий не отправлен! В текстовом поле пусто!" . PHP_EOL;
  else
    {if(!$_POST['name'])
      $name = 'Аноним';
     else
      $name = $_POST['name'];
     file_put_contents('comments.txt', $name . "--->" . $_POST['text'] . PHP_EOL, FILE_APPEND);
     $files = file_get_contents('comments.txt');
     $files = array_filter(explode(PHP_EOL, $files));
     $result = [];
     foreach ($files as $key => $value)
      $result[$key] = explode("--->", $value);
     $is_visible = '';
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
  <title>Task 7</title>
 </head>
 <body>
  <div <?=$is_visible?>>
  <?php if($is_visible == '')
      foreach ($result as $value) {
        echo "<strong>$value[0]</strong>" . ' написал:<br><p>' . $value[1] . '</p><br>';
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
 </body>
</html>