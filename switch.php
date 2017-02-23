<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php

    $numero = 4;

      switch ($numero) {
        case 4:
          echo "Número 4";
          break;
        case 6:
          echo "Número 6";
          break;

        default:
          echo "Número incorreto /ou não encontrei nenhum número!";
          break;
      }
     ?>
  </body>
</html>
