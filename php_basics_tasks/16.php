<html>
  <head>
    <title>Task 16</title>
  </head>
  <body>
    <p>
      <?php
        $a = rand(0,100);
        $b = rand(0,100);
        echo "Первое число: {$a}, второе число: {$b}.<br>";
        echo "Максимальное число: " . max($a,$b);
      ?>
    </p>
  </body>
</html>