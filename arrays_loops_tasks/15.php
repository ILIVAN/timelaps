<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 15</title>
 </head>
 <body>
    <?php
      $arr = [4, 2, 5, 19, 13, 0, 10];
      $count = 1;
      foreach ($arr as $key => $value)
       $count++;
      echo "В массиве {$count} элементов.";

    ?>
 </body>
</html>