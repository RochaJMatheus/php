<?php
    //Utilização basica  do tipo ARRAY
    
    //Declarando um array
    $list_nomes = array('Matheus' ,'Maria' , 'João');

    //Acessando idices de forma individual sem um for each
    echo '1° Nome : '.$list_nomes[0].'</br>'.
         '2° Nome : '.$list_nomes[1].'</br>'.
         '3° Nome : '.$list_nomes[2].'</br>';
    
    //Declarando o array de outra forma
    $numeros[0] = 1;
    $numeros[1] = 2;
    $numeros[2] = 3;

    //Outra forma de declarar o Array 
    $varArray = ['Matheus' , 'Jose' , 'Rocha'];
    echo '</br>Nova forma <<<<<<<>>>>>>>> </br> 1° Nome : '.$varArray[0] . '</br>'.
          '2° Nome : '.$varArray[1]. '</br>'.
          '3° Nome : '.$varArray[2].'</br>';   

    //Um array pode ser misto
    
    $arrayMisto['nome'] = 'Matheus José Rocha';
    $arrayMisto['idade'] = 21;
    $arrayMisto['salario'] =  2764.90;
    echo '</br>Array MISTO </br>';
    echo 'Nome : '.$arrayMisto['nome'].'</br>';
    echo 'Idade : '.$arrayMisto['idade'].'</br>';
    echo 'Salario : '.$arrayMisto['salario'].'</br>';

?>