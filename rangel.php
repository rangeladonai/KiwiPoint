<?php
require __DIR__ . '/vendor/autoload.php'; //incluir autoload do composer

use Dompdf\Dompdf; //define o namespace para uso da classe de dompdf

$dompdf = new Dompdf(); //instancia a classe dompdf

$dompdf->loadHtml("<h1>Hello World!</h1>"); //carrega html que será pdf

$dompdf->setPaper('A4'); //seta tipo do papel

$dompdf->render(); //renderiza

header('Content-type: application/pdf'); //Muda o tipo de header do navegador, para abrir pdf

//$dompdf->output();

$dompdf->stream();  //Baixa o PDF