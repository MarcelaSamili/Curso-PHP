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
    //CRIANDO FUNÇOES
  //Rotinas com parametros dinâmicos
  function soma(){
    $p=func_get_args();
    $tot=func_num_args();
    $s = 0;
    for ($i=0; $i < $tot ; $i++) { 
      $s = $s + $p[$i];
    }
    return $s;
  }
  $res = soma(2,5,8);
  echo "A soma vale $res";
  ?>
    
</div>
</body>
</html>