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
  /*$c = array( 1 => 9,8 => 7, 4 =>5);
  print_r($c);*/


  for ($i=0; $i <=10 ; $i++) { 
    if ($i % 3==0)
      continue;
      echo $i."-";
    
 }

  





  ?>
  </pre> 
</div>
</body>
</html>