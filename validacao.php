<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
    <?php
    if(isset($_POST['enviar'])){
      $usuario = $_POST['usuario'];
      $senha = $_POST['senha'];
      $email = $_POST['email'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];


      /*MODO 1
      if(strlen($usuario) < 5 || strlen($usuario) > 15){
        echo "O usuário deve conter mais de 5 caracteres e menos de 15 caracteres";
      }else if(strlen($senha) < 4){
        echo "Sua senha deve conter no minimo 4 caracteres";
      }else if(strlen($estado) != 2){
        echo "O campo estado deve conter 2 caracteres";
      }else if(!strstr($email, '@')){
        echo "Você deve inserir um e-mail válido";
      }
      else{
        echo "Todos os campos estão corretos!";
      }*/






    }




     ?>
  </body>
</html>
