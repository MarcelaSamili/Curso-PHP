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
  //essa é uma função que não retorna valor, 
  /*function soma ($a,$b){
    $s = $a +$b;
    echo "<p>A soma entre os valores é $s </p>";
  }
  soma(3,4);
  soma(8,2);
  $x = 5;
  $y =8;
  soma($x,$y);*/
  //PARA FAZER COM QUE RETORNE VALOR É ASSIM:
  function soma ($a,$b){
    $s = $a +$b;// se voce quiser por so return $a+$b tb funciona nem precisa do $s
    return $s;
  }
  $res =soma(3,4);
  echo "A soma é $res";
  echo "</br>";
  $x = 8;
  $y = 5;
  $r = soma($x, $y);
  echo "A soma entre $x e $y é $r";
  ?>
    
</div>
</body>
</html>