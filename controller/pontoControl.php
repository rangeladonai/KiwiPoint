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
        $return = array();
        
        $codFuncionario = $_POST['codFuncionario'];
        $senhaFuncionario = $_POST['senhaFuncionario'];
        $dataTime = date('Y-m-d H:i:s');
        
        $pontoModel = new PontoModel();
        $validaFuncionario = $pontoModel->validaFuncionario($codFuncionario, $senhaFuncionario);
        if ($validaFuncionario->rowCount()){
            while ($row = $validaFuncionario->fetch(PDO::FETCH_ASSOC)){
                $return['id'] = $row['idFuncionario'];
                $return['nome'] = $row['nomeFuncionario'];
                $return['email'] = $row['email'];
                $return['codigo'] = $row['codigo'];
                $return['senha'] = $row['senha'];
                $return['cpf'] = $row['cpf'];
            }
        }

        // if (!empty($return)){
        //     $_SESSION['idFuncionario'] = $return['id'];
        //     $_SESSION['nomeFuncionario'] = $return['nomeFuncionario'];
        //     $_SESSION['email'] = $return['email'];
        //     $_SESSION['codigo'] = $return['codigo'];
        //     $_SESSION['senha'] = $return['senha'];

        //     $pontoModel->inserePonto($_SESSION['idFuncionario'], $dataTime);
        // }
        
        //var_dump($return);
        //die;
        echo json_encode($return);
    }
}