<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php

      $string = "Faltam 10 dias para o Carnaval!!";
      $string2 = "Fernando";

      //A Função abaixo cona a quantidade de caracteres da nossa String
      echo strlen($string);
      echo "<br>";

      //A Função abaixo converte todos os caracteres para MAIUSCULO!!!
      echo strtoupper($string2);
      echo "<br>";

      //A função abaixo converte todos os caracteres para MINUSCULA!!!
      echo strtolower($string2);
      echo "<br>";

      if(strstr($string, '2')){
        echo "Encontrei!!";
      }else{
        echo "Não encontrei não :-(";
      }

     ?>
  </body>
</html>
