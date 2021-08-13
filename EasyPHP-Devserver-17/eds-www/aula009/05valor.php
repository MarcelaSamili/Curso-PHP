<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>

</head>

<body>
<div>	
    <?php
        $n1 = $_GET["nota1"];
        $n2 = $_GET["nota2"];
        $media = ($n1 + $n2)/2;
        echo "Sua media é $media";
        if ($media <= 4){
            $tipo = "</br>Voce esta REPROVADO";
        }
        elseif($media >= 5 and $media <= 7){
            $tipo = "</br>Voce esta de RECUPERAÇÃO";
        }
        else{
            $tipo = "</br>Voce esta APROVADO";
        }
    echo $tipo; 
    ?>
    <a href="ex05.html">voltar</a></br>
</div>
</body>
</html>