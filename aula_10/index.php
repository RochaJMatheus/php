<?php

//Condições em php usando ==
$var1 = 'Matheus';
$var2 = 'Matheus';

//operador simples == 
if ($var1 == $var2) {
    echo '<div style="widhth: 300px; height: 300px; background: red;"></div>';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>
            <br>Dividindo código php em blocos/Operadores matemáticos</br>
            <?php
            $variavel1 = 10 + 5;
            $variavel2 = '10 +5';
            if ($variavel1 ==  $variavel2) {
                echo "<br>Variavel 1 é igual (==) a variavel 2 <br>";
            } else if ($variavel1 != $variavel2) {
                echo "</br>Variavel 1 é diferente (!=) variavel 2 <br>";
            } else {
                echo"Erro";
            }
            ?>
        </div>
    </body>
    </html>
<?php
    //Nova tag 
} else {
    echo '<div style="widhth: 300px; height: 300px; background: blue;"> CONDIÇÃO NÃO BATE</div>';
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div>Outro site !!!</div>
    </body>

    </html>
<?php
    //Chave do PHP fehcou aqui
}
?>