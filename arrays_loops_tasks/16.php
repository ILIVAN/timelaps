<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 16</title>
 </head>
 <body>
    <?php
      $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
      foreach ($arr as $key => $value){
        echo $value;
        if($value%3==0)
          echo "<br>";
        else
          echo ", ";
      }
    ?>
 </body>
</html>