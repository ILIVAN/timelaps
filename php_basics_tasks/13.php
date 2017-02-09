<html>
  <head>
    <title>Task 13</title>
  </head>
  <body>
    <p>
      <?php
        $s = rand(100,1000);
        $t = rand(1,10);
        echo "Расстояние: {$s} км. Время движения: {$t} ч.<br>";
        echo "Скорость передвижения: " . round($s/$t, 2) . " км/ч или " . round($s/($t*3.6), 2) . " м/с.";
      ?>
    </p>
  </body>
</html>