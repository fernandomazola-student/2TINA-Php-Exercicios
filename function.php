<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
      function digaAlgo(){
        echo "Hoje tem jogo do Timão!!";
      }

      digaAlgo();

      function calcula(){
        echo 457 + 122;
      }

      calcula();

      function init(){
        digaAlgo();
        echo "<br>";
        calcula();
      }

      init();
     ?>
  </body>
</html>
