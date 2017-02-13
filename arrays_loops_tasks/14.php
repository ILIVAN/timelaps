<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 14</title>
 </head>
 <body>
    <?php
      $arr = [4, 2, 5, 19, 13, 0, 10];
      $e = rand(2,4);
      $i=0;
      foreach ($arr as $key => $value) {
        if($value == $e)
          {echo "Есть!<br>" . "e = " . $e;$i=1;break;}
      }
      if($i==0)
      echo "Нет!<br>" . "e = " . $e;
    ?>
 </body>
</html>