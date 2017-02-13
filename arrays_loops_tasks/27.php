<?php
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$row = rand(3,20);
$cols = rand(3,20);
?>

<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Task 27</title>
 </head>
 <body>
  <?="Используйте 'Oбновить' для построения новой таблицы!<br>"?>
  <table border="1" cellpadding="5" >
  <caption>Таблица случайных цветов:</caption>
   <?php for($i=0;$i<$row;$i++) {?>
    <tr>
   <?php for($j=0;$j<$cols;$j++) {?>
        <td align="center" style='background-color:<?=$colors[rand(0,6)]?>'><?=rand(1,50)?></td>
    <?php } ?>
    </tr>
   <?php } ?>
 </body>
</html>