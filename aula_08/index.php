<?php
    //Concatenação  utilizando "."
    $frase = 'Meu nome é :';
    $nome = ' Matheus';
    $nomeDaClasse = 'BOX';
    echo 'Meu nome é :'.$nome.'<br>';

    //Possivel utilizar constantes
    define('NOME' , 'Rocha');
    echo 'Meu sobrenome é : '.NOME.'</br>'; 


    //Concatenação de duas variaveis
    echo $frase.$nome . '</br>';

    //Concatenação utilziando aspas """"
    echo "MEU NOME É $nome";
    
    //Tomar cuidado com as aspas duplas utilizando HTML junto a concatenação
    echo "<div class =\"$nomeDaClasse\">Meu conteudo da div</div>";

    
?>  