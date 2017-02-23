<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
      /*
        LOOP INFINITO
          while (4 < 10){
            echo "Bom dia !";
        }
      */

      $contador = 0;
      while ($contador <= 10) {
        echo "Bom dia !" . "<br>";
        $contador++;
      }

     ?>
  </body>
</html>
