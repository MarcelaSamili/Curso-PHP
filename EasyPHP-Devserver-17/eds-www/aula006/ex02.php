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
    // MOSTRAR QUAL FOI O ANO ANTERIOR AO ANO ATUAL.
        $atual = $_GET["aa"]; // essa linha vai pegar o ano na url
        echo "O ano atual é $atual e o ano anterior é ". --$atual; //nesse caso foi usado o pre incremento para funcionar

        
	?>
</div>
</body>
</html>