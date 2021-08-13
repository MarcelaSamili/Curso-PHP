<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>

</head>

<body>
<div id="caixa">	
    <?php
        $valor = $_GET["v"];
        $raiz = sqrt($valor);
        echo "A raiz de $valor é ". number_format($raiz, 2);
    ?>
    <a href="ex01.html">Voltar</a>
</div>
</body>
</html>