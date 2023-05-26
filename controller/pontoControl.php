<?php
$classe = new Ponto;
require '../controller/sistemaControl.php';
//////
class Ponto
{
    function registraPonto()
    {
        require '../model/pontoModel.php';
        $codFuncionario = $_POST['codFuncionario'];
        $senhaFuncionario = $_POST['senhaFuncionario'];

        $pontoModel = new PontoModel();
        $validaFuncionario = $pontoModel->validaFuncionario($codFuncionario, $senhaFuncionario);

        if ($validaFuncionario->rowCount()){

        } else {
            return '../view/home.php?msg=402';
        }
    }
}