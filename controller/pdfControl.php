<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
function montaPDF()
{
    include '../model/pontoModel.php';
    $conteudoPonto = array();

    $pontoModel = new PontoModel();
    $consultaPontosMes = $pontoModel->pesquisaPontos($_GET['action'], $_SESSION['id'], $_REQUEST['mes']);
    if ($consultaPontosMes->rowCount()){
        while ($rowPontosMes = $consultaPontosMes->fetch(PDO::FETCH_ASSOC)){
            $conteudoPonto[] = $rowPontosMes;
        }
    }
    include '../pdfPontos.php';
}
