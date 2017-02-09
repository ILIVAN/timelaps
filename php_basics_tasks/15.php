<html>
  <head>
    <title>Task 15</title>
  </head>
  <body>
    <p>
      <?php
        $a = rand(0,100);
        $b = 0;
        echo "Переменная а = {$a}, переменная b = {$b}.<br>";
        $action = rand(1,5);
        switch ($action) {
            case 1:
              $operator = "+";
              echo "operator = {$operator}.<br>";
              echo 'a + b = ';
              echo $a+$b;
               break;
            case 2:
              $operator = "-";
              echo "operator = {$operator}.<br>";
              echo 'a - b = ';
              echo $a-$b;
               break;
            case 3:
              $operator = "*";
              echo "operator = {$operator}.<br>";
              echo "a {$operator} b = " . $a*$b;
               break;
            case 4:
              if($b==0){
                echo "Деление на 0!";
                break;}
              else {
                $operator = "/";
                echo "operator = {$operator}.<br>";
                echo "a {$operator} b = " . round($a/$b,2);
                 break;}
            case 5:
              if($b==0){
                echo "Деление на 0!";
                break;}
              else  {
                $operator = "%";
                echo "operator = {$operator}.<br>";
                echo "a {$operator} b = " . $a%$b;
                 break;}}

      ?>
    </p>
  </body>
</html>