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

        echo "Seu nome de usuário é: " . $usuario . "<br>" . "Sua senha é: " . $senha;

        $nomes = array("Fernando", "Oliveira", "Mazola");

        if(strlen($usuario) < 5){
          echo "Insira uma senha acima de 5 caracteres";
        }
        if(strlen($usuario) < 15){
          echo "O nome de usuário é muito grande";
        }
        if(in_array($usuario, $nomes)){
          echo "Bem vindo, " . $usuario;
        }else{
          echo "Amigão, você não tem permissão =/ ";
        }
      }




     ?>


      <form action="formulario.php" method="post">
        <input type="text" placeholder="Usuário" name="usuario"><br>
        <input type="password" placeholder="Senha" name="senha"><br>
        <input type="submit" name="enviar">
      </form>


  </body>
</html>
