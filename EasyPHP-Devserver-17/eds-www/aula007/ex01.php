<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>
    <style>
        div#caixa {
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
    //PERMITIR QUE O USUÁRIO ESCOLHA ENTRE SOMAR E MULTIPLICAR DOIS NUMEROS.
      $a = $_GET["a"];
      $b = $_GET["b"];
      $tipo = $_GET["op"];
      echo "Os numeros digitados foram $a e $b";
      $r = ($tipo == "s") ? $a + $b : $a*$b; //operador unario
	  echo "O resultado é $r";
    ?>
</div>
</body>
</html>