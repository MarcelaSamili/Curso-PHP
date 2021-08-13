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
  //ESTRUTURA DE REPETIÇAÕ WHILE COM TESTE LÓGICO
    //contando em ordem crecente
    /*$c = 1;
    *while ($c <= 10){
    *  echo $c;
    *  $c ++;
    }*/
    //contando em ordem decrecente
    $c = 10;
    while ($c > 0){
      echo $c;
      $c --;
    }
      
    ?>
</div>
</body>
</html>