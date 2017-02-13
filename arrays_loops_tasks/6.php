<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 6</title>
 </head>
 <body>
     <?php
     $en = [];
     $ru = [];
     $i=0;
     $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
     foreach ($arr as $key => $value){
      $en[$i] = $key;
      $ru[$i] = $value;
      $i++;}

     echo "<pre><br>";
     print_r($en);
     print_r($ru);
    ?>

 </body>
</html>