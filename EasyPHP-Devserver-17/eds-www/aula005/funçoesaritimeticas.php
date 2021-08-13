<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>
    <style>
        div#caixa { /* isso é a caixa azul foi feita em CSS */ 
            margin: 30px;
            box-shadow: 1px 1px 1px rgba(0,0,0.3);
            width: 600px;
            height: 500px;
            color: indianred;
            border: 3px solid white;
            background-color: lightblue;
            font-size: 15pt;   
        }
    
    </style>
</head>

<body>
<div id="caixa">	
    <?php
        $v1 = $_GET["x"]; // O GET tem que ser maiúsculo
	      $v2 = $_GET["y"];
	      echo "<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "</br>O valor absoluto de $v2 é ". abs($v2); 
        echo "</br>O valor de $v1<sup> $v2</sup> é ".pow($v1, $v2); // <sup> e </sup> é pra um número ficar em cima do outro igual quando a gente escreve.
        echo "</br>A raiz de $v1 é ". sqrt($v1);
        echo "</br>O valor de $v2 arrdondado é ". round($v2); //voce pode usar também o "ceil" que sempre arrendonda para cima e o "floor" que sempre arredonda para baixo.
        echo "</br>A parte inteira de $v2 é ". intval($v2);
        echo "</br>O valor de $v1 em Moeda é R$". number_format($v1, 2, "," , ".");
  ?>

</div>
</body>
</html>
