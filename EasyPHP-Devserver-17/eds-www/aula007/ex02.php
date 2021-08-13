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
    //IGUAL E IDAENTICO
    $a = 3;
    $b = "3";
    $r = $a === $b ? "sim" : "nao";
    echo "As variaveis A e B são indenticas?";
    // == iguais ele testa se é igual independente do seu tipo
    // === iguai testa se ele sao indenticos ou seja ele testa se o tipo é igual também
      
    ?>
</div>
</body>
</html>