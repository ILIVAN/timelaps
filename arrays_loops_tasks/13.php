<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 13</title>
 </head>
 <body>
    <table border="1" width="40%" cellpadding="5" >
  <caption>Таблица умножения (20x20):</caption>
   <?php for($i=1;$i<=20;$i++) {?>
    <tr>
   <?php for($j=1;$j<=20;$j++) {?>
        <td align="center"><?=$i*$j?></td>
    <?php } ?>
    </tr>
   <?php } ?>
 </body>
</html>