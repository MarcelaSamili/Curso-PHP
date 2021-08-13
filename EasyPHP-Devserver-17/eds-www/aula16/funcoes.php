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
    //usando a função printf
    /*$p = 'leite';
    $pr = 4.5;
    printf('O %s custa %.2f', $p, $pr);*/
    
    //usando a função print_r
    /*$v [1] = 5;
    $v [2] = 8;
    $v [3] = 1;
    print_r($v);
    
    $v2 = array (3,8,4,6,9);
    print_r($v2) pode ser tb var_dump($v2) ou var_export($v2)*/
    
    //Função wordwrap

    /*$txt = "Este é um exemplo de sting grande para tesar a funcionalidade do wordwrap";
    $res = wordwrap($txt, 20, "<br>\n", false);
    echo $res;*/

    //Função strlen
    /*$txt = "Curso em Vídeo";
    $tamanho = strlen($txt);
    print($tamanho);//essafunção conta as letras incuind os espaços ent as palavras*/

    //Fução trim
    /*$nome = "   josé dos Santo   ";
    echo(strlen($nome));
    $novo = trim($nome);//essa função elimina os espaços antes e depois = "josexdosxSanto"
    echo(strlen($novo));*/

    //Função ltrim
    // esse elimina os espaços em branco do inicio
    //Função rtrim
    // e esse elimina os espaçs embranco do final

    //Função str_word_count
    //Essa funçao retorna aquantitade de palavras que ha na string
    /*$frase = "Eu vou estudr PHP";
    $cont = str_word_count($frase, 0);//0 somente conta as palavras 1 ele cria um vetor array mostrando a posição delas e 2 cria tb um vetor vostrando a posição da primeira letra de cada palavra
    print($cont);*/

    //Funçao explode
    //essa funçao quebra a fraseonde ha espços ou o que voce por
    /*$site = "Curso em video";
    $vetor = explode(" ", $site);
    print_r($vetor);*/

    //Função implode
    //essa faz o contrario ela preenche
    /*$vetor[0] = "Curso";
    $vetor[1] = "em";
    $vetor[2] = "Vídeo";
    $texto = implode("#", $vetor);//pode ser join tb
    print($texto);*/

    //Função chr
    //mostra qual letra ta no codigo
    /*$letra = chr(67);
    echo "A letra de codigo 67 é $letra";*/

    //Função ord
    //essa funçaõ faz o contrario de chr, enola vc poe a letrae ele te da o códig
    $letra = "C";
    $cod = ord($letra);
    echo "O código da $letra é $cod";




    ?>
    
</div>
</body>
</html>