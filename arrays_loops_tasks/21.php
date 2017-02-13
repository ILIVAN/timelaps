<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 21</title>
 </head>
 <body>
    <?php
     for($i=1;$i<=9;$i++) {
      $output = '';
      for($j=0;$j<$i;$j++)
       $output.=$i;
      echo $output . "<br>";
     }

    ?>
 </body>
</html>