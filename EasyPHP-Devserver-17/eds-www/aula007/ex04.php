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
    //ELRIÇOES
    $an = $_GET['an'];
    $id = 2021 - $an;
    echo "Quem nasceu em $an tem $id anos";
    $tipo = ($id >=18 and $id <= 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO";
    echo "</br>E dessa forma seu voto é $tipo";
    

      
    ?>
</div>
</body>
</html>