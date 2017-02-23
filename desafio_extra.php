<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
    function conversaoDolar($dolar, $cotacao, $frete){
      return ($dolar * $cotacao) + $frete;
    }

    $resultado = conversaoDolar(8750, 3.08, 17.00);
    $implode = implode(", ", $resultado);
    echo $implode;
     ?>
  </body>
</html>
