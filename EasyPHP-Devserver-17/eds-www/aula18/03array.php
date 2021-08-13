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
  <pre>
  <?php
   //Vetores e Matrizes
  $n = range(5,20,5);
  foreach ($n as $valor) {
    echo "$valor ";
  }
  
  





  ?>
  </pre> 
</div>
</body>
</html>