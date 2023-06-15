<?php
if (!isset($_SESSION)){
    session_start();
}

require '../model/pontoModel.php';
$conteudoPonto = array();

$pontoModel = new PontoModel();
$consultaPontosMes = $pontoModel->pesquisaPontos(null, $_SESSION['id'], $_REQUEST['mes']);
if ($consultaPontosMes->rowCount()){
    while ($rowPontosMes = $consultaPontosMes->fetch(PDO::FETCH_ASSOC)){
        $conteudoPonto[] = $rowPontosMes;
    }
}
$_SESSION['conteudoPonto'] = $conteudoPonto;
// var_dump($conteudoPonto);
include '../pdfPontos.php';
