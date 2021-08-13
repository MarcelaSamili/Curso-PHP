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
        $n1 = 10;
        $n2 = 15;
        $s = $n1 + $n2;
        echo "A soma de $n1 e $n2 é $s";
		// aqui no php 
        // adição usa o +
        // subtração -
        // multiplicaçao *
        // divisao /
        // módulo %
	?>
</div>
</body>
</html>