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
                $pontoModel->inserePonto($_SESSION['id'], $dataTime);
            }
            $result = ['msg' => 'sucesso'];
        }

        echo json_encode($result);
    }
}