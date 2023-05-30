<?php
$classe = new Empresa();
include '../inc/autoloader.php';

class Empresa
{
    function cadastraEmpresa()
    {
        $_SESSION['action'] = 'cadastraEmpresa';
        include '../view/cadastraEmpresa.php';
    }
    
    function confirmaCadastraEmpresa()
    {
        $_SESSION['action'] = 'confirmaCadastraEmpresa';

        require '../model/empresaModel.php';
        $empresaModel = new EmpresaModel();
        $insere = $empresaModel->insereEmpresa($_POST['nomeEmpresa'],$_POST['cnpjEmpresa'],$_POST['cepEmpresa'],$_POST['complementoEmpresa'],$_POST['ruaEmpresa'],$_POST['ufEmpresa'],$_POST['numeroEmpresa'],$_POST['bairroEmpresa'],$_POST['cidadeEmpresa'],$_POST['emailEmpresa'],$_POST['senhaEmpresa']);
        if ($insere){
            $_SESSION['situacao'] = 'cadastradaEmpresa';
            include '../view/home.php?msg=200';
        } else {
            $_SESSION['situacao'] = 'erroCadastroEmpresa';
            include '../view/home.php?msg=400';
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

        if ($validaLoginEmpresa->rowCount()){ //verifica se a quantidade de colunas retornada pela consulta é diferente positivo.
            $row = $validaLoginEmpresa->fetch(PDO::FETCH_ASSOC); //fetch na consulta, transforma a consulta em dados retornados por ela.

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
            $_SESSION['senha'] = $row['senha'];

            $_SESSION['situacao'] = 'logouComoEmpresa';
            include '../view/painelPrincipal.php';
        } else {
            $_SESSION['situacao'] = 'erroLogar';
            include '../view/home.php?msg=401';
        }

    }
}