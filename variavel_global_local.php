<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
      $x = "fora";

      function teste(){
        global $x = "dentro"; //Variável Global
      }

      echo $x;
      echo "<br>";
      teste();
      echo $x;
     ?>
  </body>
</html>
