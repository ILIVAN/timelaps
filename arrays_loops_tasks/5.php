<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 5</title>
 </head>
 <body>
     <?php
     $arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
     foreach ($arr as $key => $value)
      echo "{$key} — зарплата {$value} долларов.<br>";
    ?>

 </body>
</html>