<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php

    //Arrays
      $listaNumeros = array(17,232,249,2,42);
      echo $listaNumeros[1];
      echo "<br>";
      print_r($listaNumeros);
      echo "<br>";

      $nomes = array('Fernando', 'Daniela', 'Roseli');
      echo "<br>";
      print_r($nomes);

      // Arrays Associativos

      $nomes2 = array("primeiro_nome" => 'Fernando', "segundo_nome" => 'Roseli', "terceiro_nome" => 'Daniela' );

      echo "<br>";

      echo $nomes2['segundo_nome']

     ?>
  </body>
</html>
