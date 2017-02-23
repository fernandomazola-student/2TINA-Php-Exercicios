<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php

function megaSena(){
      for ($i=1; $i <= 6 ; $i++) {
        $numero[] = rand(1,60);


    }
    sort($numero);
    /*echo "<pre>";
    print_r($numero);
    echo "</pre>";*/

    $implode = implode("- ", $numero);
    echo $implode;
  }
    echo megaSena();
     ?>
  </body>
</html>
