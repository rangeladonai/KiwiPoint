<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include '../model/pontoModel.php';
class pdfControl extends PontoModel
{
    function montaPDF()
    {
        var_dump($_REQUEST);
        var_dump($_SESSION);
        //realizar consulta do mes selecionado, do usuario logado, e da empresa em que ele esta cadastrado
        die('acabou aqui');
    }
}
$classe = new pdfControl();
require '../inc/action.php';