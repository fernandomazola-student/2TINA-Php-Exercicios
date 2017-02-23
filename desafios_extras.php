
<!--

1) Um imposto é calculado com base na seguinte tabela :

Até 1.200,00 -> isento
de 1.201,00 a 5.000,00 -> 10%
de 5.001,00 a 10.000,00 -> 15%
acima de 10.000,00 -> 20%.

Implemente um script em PHP que calcule os impostos a pagar para um valor em cada faixa. Para cada um, mostre uma mensagem que identifique na tela a que se refere cada valor.

2) Philippe e Renata viajaram de Los Angeles até San Diego em 2 horas, percorreram a distância de 124 milhas. Sabendo que 1 milha equivale a 1,60934 quilómetros, crie uma função com parâmetro para descobrir quantos quilómetros eles andaram.

-->



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<?php
/*EXERCICIO 1*/
$porcentagem10 = 10;
$porcentagem15 = 15;
$porcentagem20 = 20;


if(isset($_POST['enviar'])){

    $valor = $_POST['valor'];


      if(!is_numeric($valor)){
        echo "Somente número";
      }else if($valor < 1200){
        echo "Isento de imposto";
      }else if($valor >= 1200 || $valor <= 5000){
        $imposto = ($valor * $porcentagem10)/100;
        echo "O seu imposto é no valor de: " . number_format($imposto, 2, ',', '.');
      }else if($valor >= 5001 || $valor <= 10000){
        $imposto = ($valor * $porcentagem15)/100;
        echo "O seu imposto é no valor de: " . $imposto;
      }else {
        $imposto = ($valor * $porcentagem20)/100;
        echo "O seu imposto é no valor de: " . $imposto;
      }

}


/*EXERCICIO 2*/
function converteKM($milhas){
  return $milhas * 1.60934;
}

$resultado = converteKM(124);
echo "Phillipe e Renata viajaram " . $resultado;



 ?>

       <form action="desafios_extras.php" method="post">
         <input type="text" name="valor" placeholder="Digite um valor:">
         <input type="submit" name="enviar" value="Enviar">
       </form>
  </body>
</html>
