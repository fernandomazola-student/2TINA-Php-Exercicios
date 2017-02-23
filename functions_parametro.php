<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
      <?php
      function somar($x, $y){
        return $x + $y;
      }
      function multiplicar($x, $y){
        return $x * $y;
      }
      function subtrair($x, $y){
        return $x - $y;
      }
      function dividir($x, $y){
        return $x / $y;
      }

      echo somar(3,4) . "<br>";
      echo multiplicar(3,4) . "<br>";
      echo subtrair(3,4) . "<br>";
      echo dividir(3,4) . "<br>";
       ?>
  </body>
</html>
