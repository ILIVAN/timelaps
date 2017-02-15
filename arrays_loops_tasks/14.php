<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 14</title>
 </head>
 <body>
    <?php
      $arr = [4, 2, 5, 19, 13, 0, 10];
      $i=0;
      foreach ($arr as $e)
         if ($e == 2 || $e == 3 || $e == 4)
          $i=1;

      if($i==0)
      echo "Нет!<br>";
      else echo "Есть!<br>";
    ?>
 </body>
</html>