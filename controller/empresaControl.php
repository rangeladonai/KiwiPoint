<?php
$classe = new Empresa();
include '../inc/autoloader.php';

class Empresa
{
    function cadastraEmpresa()
    {
        $_SESSION['action'] = 'cadastraEmpresa';
        return '../view/cadastraEmpresa.php';
    }
    
    function confirmaCadastraEmpresa()
    {
        $_SESSION['action'] = 'confirmaCadastraEmpresa';

        require '../model/empresaModel.php';
        $empresaModel = new EmpresaModel();
        $insere = $empresaModel->insereEmpresa($_POST['nomeEmpresa'],$_POST['cnpjEmpresa'],$_POST['cepEmpresa'],$_POST['complementoEmpresa'],$_POST['ruaEmpresa'],$_POST['ufEmpresa'],$_POST['numeroEmpresa'],$_POST['bairroEmpresa'],$_POST['cidadeEmpresa'],$_POST['emailEmpresa'],$_POST['senhaEmpresa']);
        if ($insere){
            $_SESSION['situacao'] = 'cadastradaEmpresa';
            return '../view/home.php?msg=200';
        } else {
            $_SESSION['situacao'] = 'erroCadastroEmpresa';
            return '../view/home.php?msg=400';
        }
    }

    function loginEmpresa()
    {
        $_SESSION['action'] = 'loginEmpresa';
        
        if (!empty($_POST['emailEmpresaLogin'])){
            $_SESSION['emailEmpresaLogin'] = $_POST['emailEmpresaLogin'];
        } else {
            unset($_SESSION['emailEmpresaLogin']);
        }
        if (!empty($_POST['senhaEmpresaLogin'])){
            $_SESSION['senhaEmpresaLogin'] = $_POST['senhaEmpresaLogin'];
        } else {
            unset($_SESSION['senhaEmpresaLogin']);
        }
        
        require '../model/empresaModel.php';
        $empresaModel = new EmpresaModel();
        $validaLoginEmpresa = $empresaModel->validaLoginEmpresa($_SESSION['action'], $_SESSION['emailEmpresaLogin'], $_SESSION['senhaEmpresaLogin']);

        if ($validaLoginEmpresa){
            $row = $validaLoginEmpresa->fetch(PDO::FETCH_ASSOC);
            var_dump($row);
            $_SESSION['situacao'] = 'logouComoEmpresa';
            return '../view/painelPrincipal.php';
        } else {
            $_SESSION['situacao'] == 'erroLogar';
            return '../view/home.php?msg=401';
        }

    }
}