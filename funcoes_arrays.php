<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
    $lista = [343,54,232,757,21,1];

    //MAX retorna o maio número do array
    echo max($lista);
    echo "<br>";


    //MAX retorna o menor número do array
    echo min($lista);
    echo "<br>";

    //SORT organiza o vetor em ordem crescente
    echo sort($lista);

    //Impressão do array inteiro
    echo "<pre>";
    print_r($lista);
    echo "</pre>";

    echo "<br>";

    $array = array('Fernando', 'Mazola', '971310854');

    //Faz a separação do front ficando mais amigavel
    $implode = implode(", ", $array);
    echo $implode;
     ?>
  </body>
</html>
