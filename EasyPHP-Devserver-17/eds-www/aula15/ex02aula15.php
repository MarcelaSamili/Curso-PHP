<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>
    <style>
      div#caixa {
              margin: auto;
              box-shadow: 1px 1px 1px rgba(0,0,0,.3);
              width: 600px;
              height: 500px;
              color: indianred;
              background-color: lightblue;
              font-size: 15pt;   
          }
    

    </style>

</head>



<body>
<div id="caixa">

  <?php
    //COMANDO INCLUDE
    include "funcoes.php";
    echo "<h1>Testando novas funções</h1>";
    ola();
    mostravalor(5);
    print("<h3>Finalizando Programa...<h3>");
    ?>
    
</div>
</body>
</html>