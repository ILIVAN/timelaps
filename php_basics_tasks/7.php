<html>
  <head>
    <title>Task 7</title>
  </head>
  <body>
    <p>
      <?php
        $myAge = 23;
          if(($myAge>=18)&&($myAge<=59))
           echo "Вам еще работать и работать";
          if($myAge>59)
           echo "Вам пора на пенсию";
          if(($myAge>=0)&&($myAge<=17)&&(gettype($myAge)==="integer"))
           echo "Вам еще рано работать";
      ?>
    </p>
  </body>
</html>