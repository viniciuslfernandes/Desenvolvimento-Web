<?php

    session_start();

    //remover indices do array de sessão
    //unset()   --> serve para qualquer array
    //exemplo: unset($_SESSION[x]);


    //destruir a variavel de sessão
    //session_destroy()  -->serve apenas para a superglobal session
    //muito comum utilizar o session_destroy() e redirecionar 

    session_destroy();
    header('Location: index.php');
?>