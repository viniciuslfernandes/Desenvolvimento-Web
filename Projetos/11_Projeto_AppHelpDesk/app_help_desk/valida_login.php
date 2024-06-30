<?php

    session_start();


    //variavel de autenticação
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = array(1=> 'Administrativo', 2=>'Usuario');
    //criando uma relação manual para testes
    $usuarios_app = array(
        array('id' => 1, 'email'=>'adm@teste.com', 'senha'=> '1234', 'perfil_id'=>1),
        array('id' => 2, 'email'=>'user@teste.com', 'senha'=> '1234', 'perfil_id'=>1),
        array('id' => 3, 'email'=>'jose@teste.com', 'senha'=> '1234', 'perfil_id'=>2),
        array('id' => 4, 'email'=>'maria@teste.com', 'senha'=> '1234', 'perfil_id'=>2)
    );

  

    /*
    //variavel super global, ela esta pegando os valores do name='email' e name='senha' que esta sendo passado na url
    $_GET['email'];
    $_GET['senha'];*/ //isso aqui serve para receber quando é pela url
    
    //recebendo pelo _POST 
    // $_POST['email'];

    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] =  $usuario_perfil_id;
        header('Location: home.php');
    }
    else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }



