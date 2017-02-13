<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 18</title>
 </head>
 <body>
    <?php
      $arr = [1 => "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
      foreach ($arr as $key => $value){
        if(($key == 6)||($key == 7))
        {
          echo "<strong>" . $value . "</strong>";
          $month = $value;}
        else {
            echo $value;
          }
        echo " ";
        }

    ?>
 </body>
</html>