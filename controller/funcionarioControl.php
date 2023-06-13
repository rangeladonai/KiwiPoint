<?php
$action = $_REQUEST['action'];
if (!empty($action)){
    if (function_exists($action)){
        call_user_func($action);
    }
}
if (!isset($_SESSION)){
    session_start();
}
////////////////////////////////////////
function LoginFuncionario()
{
    $_SESSION['action'] = 'loginFuncionario';
    if (!empty($_POST['codFuncionario'])) {
        $_SESSION['codFuncionario'] = $_POST['codFuncionario'];
    } else {
        unset($_SESSION['codFuncionario']);
    }
    if (!empty($_POST['senhaFuncionario'])) {
        $_SESSION['senhaFuncionario'] = $_POST['senhaFuncionario'];
    } else {
        unset($_SESSION['senhaFuncionario']);
    }

    require '../model/funcionarioModel.php';
    $funcionarioModel = new FuncionarioModel();
    $validaLoginFuncionario = $funcionarioModel->validaLoginFuncionario($_SESSION['action'], $_SESSION['codFuncionario'], $_SESSION['senhaFuncionario']);

    if ($validaLoginFuncionario->rowCount()) {
        $row = $validaLoginFuncionario->fetch(PDO::FETCH_ASSOC); 

        $_SESSION['id'] = $row['idFuncionario'];
        $_SESSION['nomeFuncionario'] = $row['nomeFuncionario'];
        $_SESSION['cpf'] = $row['cpf'];
        $_SESSION['idEmpresa'] = $row['idEmpresa'];
        $_SESSION['codigo'] = $row['codigo'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['nomeEmpresa'] = $row['nomeEmpresa'];
        $_SESSION['cnpj'] = $row['cnpj'];
        $_SESSION['cep'] = $row['cep'];
        $_SESSION['numero'] = $row['numero'];
        $_SESSION['user'] = $row['nomeFuncionario'];
        $_SESSION['situacao'] = 'logouComoFuncionario';
        $_SESSION['mes'] = null;
        include '../view/main.php';
    }else{
        $_SESSION['situacao'] = 'erroLogar';

        include '../view/home.php?msg=401';
    }
}

function deletaFuncionario()
{
    !empty($_REQUEST['idFuncionario']) ? $_SESSION['idFuncionario'] = $_REQUEST['idFuncionario'] : null;

    include_once '../model/funcionarioModel.php';
    $model = new FuncionarioModel();
    $umFuncionario = $model->procuraFuncionarioPorId($_SESSION['idFuncionario']);

    if ($umFuncionario->rowCount()){
        $excl = $model->deletarFuncionario($_SESSION['idFuncionario']);
        include '../view/consultaFuncionarios.php?msg=991';
    } else {
        return 'idFuncionario não encontrado no banco';
    }
}