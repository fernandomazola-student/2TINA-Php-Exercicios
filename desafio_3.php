<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
      $nac = 10;
      $am = 8.7;
      $ps = 1;
      $aulas = 70;
      $faltas = 13;
      $peso = array('pesoNac' => 20, 'pesoAm' => 30, 'pesoPs' => 50, 'pesoFaltas' => 20);
      $cota = ($aulas * (20 / 100));

      $media = ($nac * ($peso['pesoNac'] /100)) + ($am * ($peso['pesoAm'] / 100)) + ($ps * ($peso['pesoPs'] / 100));

      if($media >= 6 && $faltas <= $cota){
        echo "Sua média foi " . $media . " Você passou de ano de ano viado!";
      }else {
        echo "Faz de novo ai troxão!";
      }
     ?>
  </body>
</html>
