<html>
  <head>
    <title>Task 20</title>
  </head>
  <body>
    <p>
      <?php
       echo (boolean) 20;
       echo "<br>При преобразовании типа int в boolean любое значение отличное от 0 будет расцениваться как ИСТИНА. 0 типа int примет значение ЛОЖЬ при переводе в тип boolean. Результат вывода команды echo - пустота, потому что echo работает только с форматом string, а значение TRUE в строковом представлении - 1."
      ?>
    </p>
  </body>
</html>