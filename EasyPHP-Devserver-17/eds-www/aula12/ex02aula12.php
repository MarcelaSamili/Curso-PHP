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
  $valor = isset($_GET["val"])?$_GET["val"]:1;
  $c = $valor;
  $f = 1;
  do{
   $f = $f * $c;
   $c --;
    
  }while($c >= 1);
  echo "$valor! = $f";
  ?>
  <a href="ex02aula12.html" class="boton">voltar</a>

</div>
</body>
</html>