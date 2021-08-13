<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>
    <style>
      div#caixa {
              margin: auto;
              box-shadow: 1px 1px 1px rgba(0,0,0,.3);
              width: 600px;
              height: 500px;
              color: indianred;
              background-color: lightblue;
              font-size: 15pt;   
          }
    

    </style>

</head>



<body>
<div id="caixa">
  <?php

    $n = isset($_GET["num"])?$_GET["num"]:1;
    echo "<h3>Tabuada do $n </h3>";
    for ($c=1; $c <=10 ; $c++) { 
      $r = $n * $c;
      print("$n x $c = $r </br>");
    }
  ?>
  <p><a href="ex2.2-tabuada.php">Voltar</a></p>

    
</div>
</body>
</html>