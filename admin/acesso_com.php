<?php
session_name("chutelaaaa");

if(!isset($_SESSION)){
    session_start();
};

//Verificar se o usuario está logado na sessao 
//Identificar o usuario
if(!isset($_SESSION['login_usuario'])){
        //se nao existir, redirecionamos  para login
        header("Localtion: login.php"); exit;
};

$nome_da_sessao = session_name();
//verificar o nome da sessao
if(!isset($_SESSION['nome_da_sessao'])OR($_SESSION['nome_da_sessao']!=$nome_da_sessao)){
    //se nao existir, desttruimos a sesasao por segurança 
    session_destroy();
    header("Location: login.php"); exit;
};

    // Verificar se o login é valido
    if(!isset($_SESSION['login_usuario'])){
        session_destroy();
        header("location: login.php"); exit;
    };
 





?>