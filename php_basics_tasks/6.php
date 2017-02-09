<html>
  <head>
    <title>Task 6</title>
  </head>
  <body>
    <p>
      <?php
        $myAge = 23;
        if(($myAge>=18)&&($myAge<=59))
          echo "Вам еще работать и работать";
        if($myAge>59)
          echo "Вам пора на пенсию";
      ?>
    </p>
  </body>
</html>