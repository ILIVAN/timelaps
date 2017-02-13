<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 26</title>
 </head>
 <body>
    <?php
        $n = rand(5,15);
        $arr = [];
        for($i=0;$i<$n;$i++)
         $arr[$i] = rand(1,100);
        $x=1;
        echo "Исходный массив:<br><pre>";
        print_r($arr);
        foreach ($arr as $key => $value)
          if(($key%2==0)&&($value>0)&&($key!=0))
            $x*=$value;
        echo "Произведение элементов с четными индексами равно: {$x}<br>";
        echo "Список элементов с нечетными индексами:<br>";
        foreach ($arr as $key => $value)
          if(($key%2!=0)&&($value>0))
            echo "Индекс [{$key}], значение - {$value};<br>";

    ?>
 </body>
</html>