<?php
    //Variáveis já existentes no php

    //Aprendendo basico sobre as variáveis do servidor
    echo $_SERVER['SERVER_NAME'];
    echo '<p>';

    echo $_SERVER['DOCUMENT_ROOT'];
     
    //Printando todas as variáveis do servidor
    echo '<pre>';
        print_r($_SERVER);
    echo  '</pre>';

?>