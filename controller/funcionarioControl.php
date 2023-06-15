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
        if ($row['statu'] == 0){
            $_SESSION['situacao'] = 'erroLogar';
            header('Location:../view/home.php?msg=409');
            die;
        }
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
        header('Location:../view/home.php?msg=401');
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
        include '../view/consultaFuncionarios.php';
    } else {
        return 'idFuncionario não encontrado no banco';
    }
}

function cadastraFuncionario()
{
    include '../connection.inc.php';
    include_once '../model/funcionarioModel.php';
    $model = new FuncionarioModel();
    $implFuncionario = $model->insereFuncionario($_SESSION['idEmpresa'], $_REQUEST['nomeFuncionario'], $_REQUEST['cpfFuncionario'], $_REQUEST['codigoFuncionario'], $_REQUEST['emailFuncionario'], $_REQUEST['senhaFuncionario']);

    if ($implFuncionario){
        include '../view/consultaFuncionarios.php';
    } else {
        include '../view/consultaFuncionarios.php';
    }
}

function cadastraFuncionarioPage()
{
    if (isset($_SESSION['operacao'])){
        unset($_SESSION['operacao']);
    }
    if (isset($_SESSION['idFuncEdit'])){
        unset($_SESSION['idFuncEdit']);
    }
    if (isset($_SESSION['nomeFuncEdit'])){
        unset($_SESSION['nomeFuncEdit']);
    }
    if (isset($_SESSION['cpfFuncEdit'])){
        unset($_SESSION['cpfFuncEdit']);
    }
    if (isset($_SESSION['emailFuncEdit'])){
        unset($_SESSION['emailFuncEdit']);
    }
    if (isset($_SESSION['codFuncEdit'])){
        unset($_SESSION['codFuncEdit']);
    }
    if (isset($_SESSION['senFuncEdit'])){
        unset($_SESSION['senFuncEdit']);
    }
    include '../view/cadastraFuncionario.php';
}

function editaFuncionario()
{
    require '../connection.inc.php';
    if (!empty($_REQUEST['operacao'])){
        $_SESSION['operacao'] = 'editar';
    }
    $idFuncionario = $_REQUEST['idFuncionario'];
    $sql = "SELECT * FROM Funcionario WHERE idFuncionario = '$idFuncionario'";
    $query = $DB->prepare($sql);
    $query->execute();

    $dados = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSION['idFuncEdit'] = $dados['idFuncionario'];
    $_SESSION['nomeFuncEdit'] = $dados['nomeFuncionario'];
    $_SESSION['cpfFuncEdit'] = $dados['cpf'];
    $_SESSION['emailFuncEdit'] = $dados['email'];
    $_SESSION['codFuncEdit'] = $dados['codigo'];
    $_SESSION['senFuncEdit'] = $dados['senha'];
    include '../view/cadastraFuncionario.php';
}

function confirmaEditaFuncionario()
{
    require '../connection.inc.php';
    $id = $_REQUEST['idFuncionario'];
    $nome = $_REQUEST['nomeFuncionario'];
    $cpf = $_REQUEST['cpfFuncionario'];
    $email = $_REQUEST['emailFuncionario'];
    $cod = $_REQUEST['codigoFuncionario'];
    $sen = $_REQUEST['senhaFuncionario'];

    $sql = "UPDATE Funcionario SET nomeFuncionario = '$nome', cpf = '$cpf', email = '$email', codigo = '$cod', senha = '$sen'";
    $sql .= " WHERE idFuncionario = '$id'";
    $query = $DB->prepare($sql);
    $query->execute();
    include '../view/consultaFuncionarios.php';
}

function reativarFuncionario()
{
    require '../connection.inc.php';
    $id = $_REQUEST['idFuncionario'];

    $sql = "UPDATE Funcionario SET statu = 1";
    $sql .= " WHERE idFuncionario = '$id'";
    $query = $DB->prepare($sql);
    $query->execute();
    include '../view/consultaFuncionarios.php';
}
