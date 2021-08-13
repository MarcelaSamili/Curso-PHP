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
    //MOSTRAR A SITUAÇÃO DE UM ALUNO, DE ACORDO COM SUA MÉDIA OBTIDA.
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $m = ($n1 + $n2)/2;
    echo "Com as notas $n1 e $n2";
    echo "</br>Sua média é $m";
    $sit = ($m < 6)?"REPROVADO":"APROVADO";
    echo "</br>A situação do aluno é $sit";
    

      
    ?>
</div>
</body>
</html>