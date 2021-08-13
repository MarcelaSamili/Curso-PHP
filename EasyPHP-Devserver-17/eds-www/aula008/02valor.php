<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>

</head>

<body>
<div>	
    <?php
    //LER NOME, ANO DE NASCIMENTO E SEXO DE UMA PESSOA, MOSTRANDO SUA IDADE ATUAL
    $nome = $_GET['nome'];
    $ano = $_GET['ano'];
    $sexo = $_GET['sexo'];
    $idade = date("Y") - $ano; //o Y maiusculo mostra o ano inteiro e o y minusculo reduzido
    echo "$nome é $sexo e tem $idade anos";
    ?>
    <a href="ex02.html">Voltar</a>
</div>
</body>
</html>