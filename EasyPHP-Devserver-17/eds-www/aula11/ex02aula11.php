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
    //Usando estrutura de repetição com o html
    $c = 1;
    while ($c <=5) {
      echo "valor$c: <input type='number' name='v$c' max(100) min(0) value='0'></br>";
      $c ++;
    }
    ?>
    <input type="submit" value="Enviar" class="botao">
</div>
</body>
</html>