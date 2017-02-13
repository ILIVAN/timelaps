<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 25</title>
 </head>
 <body>
    <?php
       $n = rand(5,30);
       $array = [];
       for($i=0;$i<$n;$i++)
        $array[$i] = rand(1,1000);
       echo "<pre>";
       $min = min($array);
       $max = max($array);
       echo "Минимальный элемент массива - " . $min . ". Максимальный элемент - " . $max . "<br>";
       print_r($array);
       for($i=0;$i<$n;$i++){
        if($array[$i]==$min)
         $i_min = $i;
        if($array[$i]==$max)
         $i_max = $i;}
       $array[$i_min] = $max;
       $array[$i_max] = $min;
       echo $min . "<" . $max;
       print_r($array);

    ?>
 </body>
</html>