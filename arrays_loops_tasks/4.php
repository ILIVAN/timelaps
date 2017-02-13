<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 4</title>
 </head>
 <body>
     <?php
     $arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
     foreach ($arr as $x)
      echo $x . "<br>";
     foreach ($arr as $key => $value)
      echo "<br>" . $key;
    ?>

 </body>
</html>