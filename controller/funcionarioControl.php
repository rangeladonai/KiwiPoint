<?php
$action = '';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
} else if (!empty($_POST['action'])){
    $action = $_POST['action'];
}
if (!empty($action)){
    if (function_exists($action)){
        call_user_func($action);
    }
}

////////////////////////////////////////

function confirmaFuncionario()
{
    require '../model/FuncionarioModel.php';
    $FuncionarioModel = new FuncionarioModel();
    $insere = $FuncionarioModel->insereFuncionario($_POST['idFuncionario'],$_POST['nameFuncionario'],$_POST['cfp'],$_POST['idEmpresa'],$_POST['codigo'],$_POST['email'],$_POST['senha']);
    if ($insere){
        header('Location:../view/home.php?msg=200');
    } else {
        header('Location:../view/home.php?msg=400');
    }
}