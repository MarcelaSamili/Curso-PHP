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
   //Função strtolower
  //Essa função poe tdas as letras em miúscula
    /*$nome = "Marcela Samili";
    $nome2 = strtolower($nome);
    echo "seu nome é $nome2";*/

  //Função strtoupper
  //Ja essa passa tudo para maiusculo
  /*$nome = "Marcela Samili";
    $nome2 = strtoupper($nome);
    echo "seu nome é $nome2";*/

  //Funçao ucfist
  //Esssa somente as primeiras letra daprimeira palavras em maiusculos
    /*$nome = "sarcela samili";
    $nome2 = ucfirst($nome);
    echo "seu nome é $nome2";*/


  //Função ucwords
  //Essa a primeira letra de cada palavra fica miuscula
    /*$nome = "sarcela samili";
    $nome2 = ucwords($nome);
    echo "seu nome é $nome2";*/

  //Função strrev
  //Essa função retorna a string ao contrario
    /*$nome = "sarcela samili";
    $nome2 = strrev($nome);
    echo "seu nome é $nome2";*/


  //Função strpos
  // Mostra a posição da string que voce quizer numa frase, ela mostra na verdade aposição da primera letra dessa string, voce deve screver a palavra exatamente como ta na frase
    /*$frase = "Estou aprendendo php";
    $pos = strpos($frase, "php");
    echo "A string foi encntrada na posição $pos";*/


  //Finção stripos
  //com essa funçao nao precisa escrever exatamenteigual
    /*$frase = "Estou aprendendo php";
    $pos = stripos($frase, "PHP");
    echo "A string foi encntrada na posição $pos";*/

  //função substr_count
   //Mostra a quantidad vezes que uma palava apareceu na frase
    /*$frase = "Estou aprendendo php";
    $pos = substr_count($frase, "php");
    echo "A string foi encntrada $pos vezes";*/

  
  //Função substr
    //Essa função fatia a frase 
    /*$site = "Curso em Vídeo";
    $sub = substr($site, 0, 5);
    echo "$sub";*/


  //Função str_pad
    //Vai faer a string caber em determinado espaço
    /*$nome = 'Marcela';
    $novo = str_pad($nome,30,"#",STR_PAD_RIGHT);
    $novo2 = str_pad($nome,30,"#",STR_PAD_CENTER);
    $novo3 = str_pad($nome,30,"#",STR_PAD_LEFT);
    print('$novo</br>');
   print("$novo2</br>");
    print("$novo3</br>");*/


  //Função str_repeat
    //ele repet um string quantas vzes quizer
    /*$txt = str_repeat("php-", 5);
    print("O TEXO GERADO FOI $txt");*/


  //Função srt_replace
    //ele troca uma ca por outra
    $frase = "Gosto de estudar matematica";
    $nova = srt_replace("matematica", "php", $frase);
    echo "$nova";




  ?>
    
</div>
</body>
</html>