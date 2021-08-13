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
        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2);
        $preco += ($preco*10/100);
        echo "</br>O novo preço com 10% de aumento é R$ ". number_format($preco, 2);
	?>
</div>
</body>
</html>