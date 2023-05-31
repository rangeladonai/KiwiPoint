<?php
$classe = new Ponto;
require '../controller/sistemaControl.php';
//////
class Ponto
{
    function registraPonto()
    {
        require '../model/pontoModel.php';
        require '../connection.inc.php';        
        $codFuncionario = $_REQUEST['codFuncionario'];
        $senhaFuncionario = $_REQUEST['senhaFuncionario'];
        $result = ['msg' => 'erro'];
        $dataTime = date('Y-m-d H:i:s');
        $mes = date('m');
        $ano = date('d');
        $dia = date('Y');
        
        $pontoModel = new PontoModel();
        $validaFuncionario = $pontoModel->validaFuncionario($codFuncionario, $senhaFuncionario);
        if ($validaFuncionario->rowCount()){
            while ($row = $validaFuncionario->fetch(PDO::FETCH_ASSOC)){
                $_SESSION['id'] = $row['idFuncionario'];
                $_SESSION['nome'] = $row['nomeFuncionario'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['codigo'] = $row['codigo'];
                $_SESSION['senha'] = $row['senha'];
                $_SESSION['cpf'] = $row['cpf'];
                $_SESSION['dataHoraUltimoPonto'] = $dataTime;
                $pontoModel->inserePonto($_SESSION['id'], $dataTime, null, $mes, $dia, $ano);
            }
            $result = ['msg' => 'sucesso'];
        }

        echo json_encode($result);
    }

    function consultaPontoMes()
    {
        $_SESSION['action'] = 'consultaPontoMes';

        if (!empty($_REQUEST['mes'])){
            $_SESSION['mes'] = $_REQUEST['mes'];
        } else {
            unset($_SESSION['mes']);
        }
        include '../view/consultaPonto.php';
    }
}