<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso php</title>
</head>

<body>
<?php
    //LER UM NÚMERO E QUAL OPERAÇÃO REALIZAR O DOBRO O CUBO OU A RAIZ Q.
    $num = isset($_GET['num'])?$_GET['num']:0;
    $op = isset ($_GET['oper'])?$_GET['oper']:1;
    
    switch ($op) {
      case '1':
       $r = pow($num, 2);

        break;
      case '2':
        $r =  pow($num, 3);
        break;
      case '3':
        $r = sqrt($num);
        break;
      default:
        echo "escolha uma opção válida";
        break;
    }
    echo "</br>O resultado da operação solicitada foi $r";
    ?>
</div>
</body>
</html>