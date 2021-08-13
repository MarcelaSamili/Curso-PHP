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
  //ESTRUTURA DE REPETIÇÃO COM TESTE LOGICO NO FINAL
    $c = 1;
    do{
      echo "$c </br>" ;
      $c += 2;
    }while ($c <= 20);
  
    
    ?>
    
</div>
</body>
</html>