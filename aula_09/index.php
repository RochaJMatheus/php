<?php
    //Operações matemáticas  operadores + , - , / ,*  


    $soma = 10 + 5;
    $sub = 10 - 4;
    $div = 10/2;
    $mult = 20 * 6;

    echo 'OPERADORES BASICOS '. 
            '</br>Soma: + '.
            '</br>Subtração: -'.
            '</br>Divisão: /'.
            '</br>Multiplicação: * <br>';


    $expressao = 10 - (2 * 10);
    echo "</br>expressão  10 - (2 * 10) : $expressao <br>";

    //Operador de resto MOD
    $mod = 4 % 2;
    echo "</br>Operador de mod (RESTO) 4 % 2 numero par  : $mod <br>";

    $modImpar = 2 % 3 ;
    echo "</br>Operador de mod (RESTO) 2 % 3 numero impar  : $modImpar";
 
?>