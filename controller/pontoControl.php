<?php
if (!isset($_SESSION)){
    session_start();
}
date_default_timezone_set('America/Sao_Paulo');
require '../inc/action.php';
//include_once '../controller/sistemaControl.php';
//////
function registraPonto()
{
    require '../model/pontoModel.php';
    require '../connection.inc.php';        
    $codFuncionario = $_REQUEST['codFuncionario2'];
    $senhaFuncionario = $_REQUEST['senhaFuncionario2'];
    $dataTime = date('Y-m-d H:i:s');
    $mes = date('m');
    $dia = date('d');
    $ano = date('Y');
    $hora = date('H:i:s');

    $pontoModel = new PontoModel();
    $validaFuncionario = $pontoModel->validaFuncionario($codFuncionario, $senhaFuncionario);
    if ($validaFuncionario->rowCount()){
        $row = $validaFuncionario->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $row['idFuncionario'];
        $_SESSION['nome'] = $row['nomeFuncionario'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['codigo'] = $row['codigo'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['cpf'] = $row['cpf'];
        $_SESSION['dataHoraUltimoPonto'] = $dataTime;
        $pontoModel->inserePonto($_SESSION['id'], $dataTime, $mes, $dia, $ano, $hora, null);
        header('Location:../view/home.php?msg=1');
    } else {
        header('Location:../view/home.php?msg=0');
    }
}

function registraPontoLogado()
{
    require '../connection.inc.php';
    $idFuncionario = $_SESSION['id'];
    $dataTime = date('Y-m-d H:i:s');
    $mesPonto = date('m');
    $diaPonto = date('d');
    $anoPonto = date('Y');
    $urlFoto = "foto";
    $hora = date('H:i:s');
    $sql = " INSERT INTO Ponto(idFuncionario, dataPonto, urlFoto, mesPonto, diaPonto, anoPonto, hora)";
    $sql.= " VALUES('$idFuncionario', '$dataTime', '$urlFoto', '$mesPonto', '$diaPonto', '$anoPonto', '$hora')";
    $insert = $DB->prepare($sql);
    $insert->execute();
    $url = '../view/main.php';
    include $url;
}

function consultaPontoMes()
{
    $_SESSION['action'] = 'consultaPontoMes';

    if (!empty($_REQUEST['mes'])){
        $_SESSION['mes'] = $_REQUEST['mes'];
    } else {
        unset($_SESSION['mes']);
    }

    include '../view/main.php';
}