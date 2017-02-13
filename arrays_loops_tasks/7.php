<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 7</title>
 </head>
 <body>
     <?php
     $arr = array(2, 5, 9, 15, 0, 4);
     foreach ($arr as $key => $value){
      if(($value>3)&&($value<10))
       echo $value . " ";}
    ?>

 </body>
</html>