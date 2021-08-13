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
    // PRATICANDO O USO DE VARIAVEIS POR REFERENCIA
        // sem referencia
        /*$a = 3;
        *$b = $a;
        *$b += 5;
        *echo "A variavel A vale $a";
        *echo "</br>A variavel B vale $b";*/
        //com referencia
        $a = 3;
        $b = &$a;// para referenciar é só solocar o & antes, faça com e sem o & e veja a diferença
        $b += 5;
        echo "A variavel A vale $a";
        echo "</br>A variavel B vale $b";
       //A referencia cria uma ligaçao ntre as variaveis, assim tudo que acontece com uma, acontece com a outra.

        
	?>
</div>
</body>
</html>