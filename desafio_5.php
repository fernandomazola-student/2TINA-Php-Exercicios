<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AULA 1 PHP</title>
  </head>
  <body>
      <?php
      echo "<div style='width:100px; border:2px solid black; background-color:red;'>";
      function conversaoGraus($valor){
        return ($valor * 1.8) + 32;
      }

      echo conversaoGraus(30);
      echo "</div>";
       ?>
  </body>
</html>
