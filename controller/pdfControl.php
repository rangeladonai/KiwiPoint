<?php
use Dompdf\Dompdf; //define o namespace para uso da classe de dompdf
use Dompdf\Options;

if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include '../model/pontoModel.php';
//require __DIR__ . '/vendor/autoload.php'; //incluir autoload do composer
require '../vendor/autoload.php';
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
        $pdfContent = file_get_contents('../pdf.php'); //pega conteudo do arquivo para transformar em pdf
        
        $dompdf = new Dompdf(); //instancia a classe dompdf

        $dompdf->loadHtml($pdfContent); //carrega html que será pdf

        $dompdf->setPaper('A4'); //seta tipo do papel

        $dompdf->render(); //renderiza

        $dompdf->stream();  //Baixa o PDF

        die;
    }
}
$classe = new pdfControl();
require '../inc/action.php';