<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>

</head>

<body>
<div>	
    <?php
        $ano = $_GET['ano'];
        $idade = date("Y") - $ano;
        echo "Voce nasceu em $ano e tem $idade anos";
        if ($idade <= 17){
            $tipo = "</br>Voce ainda nao pode votar!";
        }
        elseif($idade >= 70){
            $tipo = "</br>O voto é opcional";
        }
        else{
            $tipo = "</br>Voto é obrigatorio";
        }
    echo $tipo; 
    ?>
    <a href="ex04.html">voltar</a></br>
</div>
</body>
</html>