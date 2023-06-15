<?php
if (!isset($_SESSION)){
    session_start();
}
include_once '../inc/menubar.php';
include_once '../inc/msg.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiwi</title>
    <!--Lib-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--CSS. Cole aqui embaixo o CSS proprio da pagina-->
    <link rel="stylesheet" href="../css/consultaPonto.css">
</head>
<style>
    img:hover{
        cursor: pointer;
    }
    #adicionar{
        color: white;
    }
    .info{
        text-align: center;
        border: 1px solid black;
        padding: 6px;
    }
</style>
<body>
    <div class="container">
        <table class="table">
            <div class="info">
                <h1 class="display-6"><b>Principal</b></h1>
                <label for=""><b>Empresa: </b><?=$_SESSION['nomeEmpresa']?></label>
                <br>
                <label for=""><b>CNPJ: </b><?=$_SESSION['cnpj']?></label>
                <br>
                <label for=""><b>Email: </b><?=$_SESSION['email']?></label>
            </div>
            <br>
            <div id="labels">
                <div class="info">
                    <h1 class="display-6"><b>Endereço</b></h1>
                        <label for=""><b>CEP: </b><?=$_SESSION['cep']?></label>
                        <label for=""><b>UF: </b><?=$_SESSION['uf']?></label>
                        <br>
                        <label for=""><b>Complemento: </b><?=$_SESSION['complemento']?></label>
                        <br>
                        <label for=""><b>Cidade: </b><?=$_SESSION['cidade']?></label>
                        <br>
                        <label for=""><b>País: </b>Brasil</label>
                        <br>
                </div>
            </div>
        </table>
    </div>
</body>
</html>