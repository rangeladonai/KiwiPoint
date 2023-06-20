<?php
if (!isset($_SESSION)){
    session_start();
}
$action = $_REQUEST['action'];
if (!empty($action)){
    if (function_exists($action)){
        call_user_func($action);
    }
}
/////
///////////////////////////////////
function cadastraEmpresa()
{
    $_SESSION['action'] = 'cadastraEmpresa';
    header('Location:../view/cadastraEmpresa.php');
}

function confirmaCadastraEmpresa()
{
    require_once '../model/empresaModel.php';
    $model = new EmpresaModel();
    $_SESSION['action'] = 'confirmaCadastraEmpresa';
    $insere = $model->insereEmpresa($_POST['nomeEmpresa'],$_POST['cnpjEmpresa'],$_POST['cepEmpresa'],$_POST['complementoEmpresa'],$_POST['ruaEmpresa'],$_POST['ufEmpresa'],$_POST['numeroEmpresa'],$_POST['bairroEmpresa'],$_POST['cidadeEmpresa'],$_POST['emailEmpresa'],$_POST['senhaEmpresa']);
    if ($insere){
        $_SESSION['situacao'] = 'cadastradaEmpresa';
        header('Location:../view/home.php?msg=200') ;
    } else {
        $_SESSION['situacao'] = 'erroCadastroEmpresa';
        header('Location:../view/home.php?msg=400');
    }
}

function loginEmpresa()
{
    $_SESSION['action'] = 'loginEmpresa';
    require_once '../model/empresaModel.php';
    $empresaModel = new EmpresaModel();
    $validaEmpresa = $empresaModel->validaLoginEmpresa($_SESSION['action'], $_POST['emailEmpresaLogin'], $_POST['senhaEmpresaLogin']);
    if ($validaEmpresa->rowCount()){
        $row = $validaEmpresa->fetch(PDO::FETCH_ASSOC);
        $_SESSION['idEmpresa'] = $row['idEmpresa'];
        $_SESSION['nomeEmpresa'] = $row['nomeEmpresa'];
        $_SESSION['cnpj'] = $row['cnpj'];
        $_SESSION['cep'] = $row['cep'];
        $_SESSION['complemento'] = $row['complemento'];
        $_SESSION['rua'] = $row['rua'];
        $_SESSION['uf'] = $row['uf'];
        $_SESSION['numero'] = $row['numero'];
        $_SESSION['bairro'] = $row['bairro'];
        $_SESSION['cidade'] = $row['cidade'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['user'] = $row['nomeEmpresa'];
        $_SESSION['situacao'] = 'logouComoEmpresa';
        // require_once '../controller/pontoControl.php';
        // consultaPontoMes();
        include '../view/main.php';
    } else {
        header('Location:../view/home.php?msg=303');
    }
}
