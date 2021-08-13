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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $s = $n1 + $n2;
        $media = ($n1 + $n2) / 2;
       echo "<h1>Os valalores resebidos foram $n1 e $n2</h1>";
       echo "A soma de $n1 e $n2 é $s";
       echo "</br>A subtraçõa vale ". ($n1 - $n2); // O (.) é para concatenar
       echo "</br>A multiplicaçao vale ". ($n1 * $n2);
       echo "</br>A divisção vale ". ($n1 / $n2);
       echo "</br>O modolo vale ". ($n1 % $n2);
       echo "</br>A média vale $media";
	
	?>
</div>
</body>
</html>