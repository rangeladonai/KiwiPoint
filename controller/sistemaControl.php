<?php
require '../inc/action.php';
date_default_timezone_set('America/Sao_Paulo');

//Verifica Sessão
if (!isset($_SESSION)){
    session_start();
}

//Exibe mensagemBox
if (!empty($_GET['msg'])){
    switch ($_GET['msg'])
    {
        case 200:
            echo '<script>alert("Cadastro de Empresa Realizado!!")</script>';
        break;
        case 400:
            echo '<script>alert("Houve algum erro ao realizar o cadastro da empresa! Tente novamente, ou entre em contato.")</script>';
        break;
        case 401:
            echo '<script>alert("Falha ao logar no sistema, informações incorretas.")</script>';
        break;
        case 402:
            echo '<script>alert("Dados incorretos.")</script>';
        break;
    }
}
