<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
      $assinatura = 12.90;
      $impulsos = 0.04;
      $chamadaCel = 0.20;
      $total_lig_cel = 37;

    $contaCel = ($total_lig_cel * $chamadaCel);

    echo $contaCel;

    echo "<br>";

    $contaImpulso = ( 120 - 90 ) * $impulsos;

    echo $contaImpulso;

    echo "O valor total da conta é? " . ($assinatura + $contaImpulso + $contaCel);
     ?>
  </body>
</html>
