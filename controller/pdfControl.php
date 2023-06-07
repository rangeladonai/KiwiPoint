<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include '../model/pontoModel.php';
class pdfControl extends PontoModel
{
    function montaPDF()
    {
        $conteudoPonto = array();

        $pontoModel = new PontoModel();
        $consultaPontosMes = $pontoModel->pesquisaPontos($_GET['action'], $_SESSION['id'], $_REQUEST['mes']);
        if ($consultaPontosMes->rowCount()){
            while ($rowPontosMes = $consultaPontosMes->fetch(PDO::FETCH_ASSOC)){
                $conteudoPonto[] = $rowPontosMes;
            }
        }
        $this->pdf($conteudoPonto);
    }

    function pdf($conteudo)
    {
        include '../pdfPontos.php';
    }

}
$classe = new pdfControl();
require '../inc/action.php';