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
<h1>Tabuada</h1>

<h3>Você quer ver a tabuada do?</h3>
<form method="get" action="ex02-tabuada.php">
  <select name="num">
    <?php
      for ($c=1; $c <=10 ; $c++) { 
        echo "<option>$c</option>";
      }
    ?>

  </select>
  <input type="submit" value="Tabuada">
    
</div>
</body>
</html>