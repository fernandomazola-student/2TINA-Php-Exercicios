<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php

  /*  $tabuada1 = 1;
    $range = 10;

    for ($c=0; $c < $range ; $c++) {
      $resultado1 = ($tabuada1 * $c);
      echo $tabuada1 . "x" . $c . " = " . $resultado . "<br>";
    }*/



    for ($c=1; $c <= 10 ; $c++) {
      echo "<div style='width:20%; border:1px solid black; display:inline-block; box-sizing: border-box; padding:15px;'>";
      echo "<h1>Tabuada {$c}</h1>";

      for ($c1=0; $c1 <= 10 ; $c1++) {
        $resultado = ($c * $c1);
        echo "<hr>";
        echo $c . "x" . $c1 . " = " . $resultado . "<br>";
      }
      echo "</div>";
    }

     ?>
  </body>
</html>
