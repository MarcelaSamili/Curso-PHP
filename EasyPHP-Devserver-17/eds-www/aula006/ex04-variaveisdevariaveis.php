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
    // PRATICANDO O USO DE VARIAVEIS DE VARIAVEIS
        $x = "abc";
        $$x = "def"; // fazendo isso essa varivel de baixo recebe o nome de abc com o conteudo def. 
        echo "O conteudo da vriavel X é $x";
        echo "</br>A variavel criada recebeu o valor $abc";
        
        
	?>
</div>
</body>
</html>