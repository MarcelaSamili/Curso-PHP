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
    //PASSAGEM DE PARAMETRO POR VALOR
    print("Passagem de parametro por valor </br>");
    function teste($x) {
      $x += 2;
      echo "O valor de X é $x";
    }
    $a = 3;
    teste($a);
    echo "<p>O valor de A é $a</p>";
    

    //PASSAGEM DE PARAMETRO POR REFERENCIA
     print("Passagem de parametro por referencia</br>");
     function teste2(&$x) { // PARA PASSAR POR REFERENCIA BASTA POR O & ANTES DO PARAMETRO
      $x += 2;
      echo "O valor de X é $x";
    }
    $a = 3;
    teste2($a);
    echo "<p>O valor de A é $a</p>";
    ?>
    
</div>
</body>
</html>