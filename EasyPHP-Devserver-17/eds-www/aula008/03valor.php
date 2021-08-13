<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "texto genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "40pt"; 
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <title>Curso php</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }

    </style>

</head>

<body>
<div>	
    <?php
    //PERMITIR A PERSONALIZAÇÃO DE UM TEXTO ATRAVEZ DE UM FORMULÁRIO
    echo "<span class='texto'>$txt</span>";
    ?>
    <a href="ex03.html">Voltar</a>
</div>
</body>
</html>