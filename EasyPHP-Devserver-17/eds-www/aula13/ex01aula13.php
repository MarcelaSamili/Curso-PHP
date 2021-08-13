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
    for ($c =1;$c <=10; $c++){
      echo "$c ";
    }
    echo "</br>";
    for($c=10;$c>=1;$c--){
      echo "$c ";
    }
    echo "</br>";
    for ($c=0; $c <=50 ; $c+=5) {
      echo "$c "; 
    }
    echo "</br>";
    ?>
    
</div>
</body>
</html>