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



function confirmaPonto()
{
    require '../model/pontoModel.php';
    $pontoModel = new pontoModel();
    $insere = $pontoModel->inserePonto($_POST['idPonto'],$_POST['dataPonto'],$_POST['idFuncionario'],$_POST['urlFoto']);
    if ($insere){
        header('Location:../view/home.php?msg=200');
    } else {
        header('Location:../view/home.php?msg=400');
    }
}