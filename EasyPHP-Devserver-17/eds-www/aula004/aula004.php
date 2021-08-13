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
		$nome = "Marcela";
        $idade = 20;
        //echo $nome. " tem ". $idade. " anos "."!";    pode ser dessa forma ou da de baixo..
        echo "$nome tem $idade anos!" //as aspas DEVEM ser DUPLAS para isso funcionar,pq se nao for duplas ele nao interpreta, somente escreve aquilo que vc escreveu...faça o teste, coloque aspas simpres pra vc ver.
	?>
</div>
</body>
</html>
