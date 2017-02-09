<html>
  <head>
    <title>Task 10</title>
  </head>
  <body>
    <p>
      <?php
        $day = rand(1,7);
        switch ($day) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
               echo "Это рабочий день";
               break;}
      ?>
    </p>
  </body>
</html>