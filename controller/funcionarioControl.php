<?php
$classe = new funcionarioControl();
require '../controller/sistemaControl.php';
////////////////////////////////////////
class funcionarioControl
{
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
    
            $_SESSION['idFuncionario'] = $row['idFuncionario'];
            $_SESSION['nomeFuncionario'] = $row['nomeFuncionario'];
            $_SESSION['cpf'] = $row['cpf'];
            $_SESSION['idEmpresa'] = $row['idEmpresa'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['senha'] = $row['senha'];
    
            $_SESSION['situacao'] = 'logouComoFuncionario';

            include '../view/painelPrincipal.php';
        }else{
            $_SESSION['situacao'] = 'erroLogar';

            include '../view/home.php?msg=401';
        }
    }
}
