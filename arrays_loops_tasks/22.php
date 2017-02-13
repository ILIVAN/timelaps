<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 22</title>
 </head>
 <body>
    <?php
     $output = '';
     for($i=1;$i<11;$i++)
     {
        $output.='x';
        if($i%2==0)
        echo $output . "<br>";
     }

    ?>
 </body>
</html>