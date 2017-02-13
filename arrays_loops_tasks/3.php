<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 3</title>
 </head>
 <body>
     <?php
     $result = 0;
     $array = [26, 17, 136, 12, 79, 15];
     foreach ($array as $x)
      $result+=pow($x,2);
    echo $result;
    ?>

 </body>
</html>