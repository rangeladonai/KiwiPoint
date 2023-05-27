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
        $return = ['msg'=>'rowCountNegativo'];

        $pontoModel = new PontoModel();
        $validaFuncionario = $pontoModel->validaFuncionario($codFuncionario, $senhaFuncionario);
        if ($validaFuncionario->rowCount()){
            $row = $validaFuncionario->fetch(PDO::FETCH_ASSOC);
            $return = $row;
        }
        
        echo json_encode($return);
    }
}