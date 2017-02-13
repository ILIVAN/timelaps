<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 19</title>
 </head>
 <body>
    <?php
      $arr = [1 => "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
      foreach ($arr as $key => $value){
        if($key == date('N'))
        {
          echo "<i>" . $value . "</i>";
          $day = $value;}
        else {
            echo $value;
          }
        echo " ";
        }

    ?>
 </body>
</html>