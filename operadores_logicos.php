<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php

    /*
    ==
    ===
    >=
    !=
    &&
    ||
    */
    //Comparando se 4 é igual a 4, mesmo se fosse texto
      if(4 == 4 ){
        echo "Sim, é verdade";
      }else {
        echo "Errou!!";
      }

      echo "<br>";

      //Verificando se 4 é maior ou igual a 4
      if (4 >= 4) {
        echo "Sim, é verdade";
      }

      echo "<br>";

      //Verificando se 4 é diferente de 3
      if (4 != 3) {
        echo "Sim, é diferente";
      }

      echo "<br>";

      //Verificando se 4 é igual a 4 no tipo de variavel correto, confere o tipo da variavel e o valor
      if (4 === "4") {
        echo "Sim, é verdade";
      }else {
        echo "Deu ruim!";
      }

      echo "<br>";

      if (4 == 7 || 4 < 5) {
        echo "Sim é verdade";
      }else {
        echo "Deu ruim!";
      }

      echo "<br>";

      if (4 == 7 && 4 < 5) {
        echo "Sim, é verdade";
      }else {
        echo "Deu ruim!";
      }
     ?>
  </body>
</html>
