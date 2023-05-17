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

/////////////////////////////////////////////////////////////////////////////////////////////

function cadastraEmpresa()
{
    include '../view/cadastraEmpresa.php';
}

function confirmaCadastraEmpresa()
{
    require '../model/empresaModel.php';
    $empresaModel = new EmpresaModel();
    $insere = $empresaModel->insereEmpresa($_POST['nomeEmpresa'],$_POST['cnpjEmpresa'],$_POST['cepEmpresa'],$_POST['complementoEmpresa'],$_POST['ruaEmpresa'],$_POST['ufEmpresa'],$_POST['numeroEmpresa'],$_POST['bairroEmpresa'],$_POST['cidadeEmpresa'],$_POST['emailEmpresa'],$_POST['senhaEmpresa']);
    if ($insere){
        header('Location:../view/home.php?msg=500');
    } else {
        header('Location:../view/home.php?msg=400');
    }
}