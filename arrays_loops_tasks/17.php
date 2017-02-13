<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 17</title>
 </head>
 <body>
    <?php
      $arr = [1 => "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];
      foreach ($arr as $key => $value){
        if($key == date("n"))
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