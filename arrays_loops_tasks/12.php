<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 12</title>
 </head>
 <body>
     <?php
     $n = 1000;
     $num=0;
     while ($n>=50){
      $n/=2;
      $num++;
     }
     echo "n = " . $n . "<br>" . "num = " . $num;
    ?>

 </body>
</html>