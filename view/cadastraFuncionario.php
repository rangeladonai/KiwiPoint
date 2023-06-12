<?php
include '../inc/menubar.php';
include '../connection.inc.php';
if (!isset($_SESSION)){
    session_start();
}
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

<body>
    <div class="container">
        <form action="" id="cadastraFuncionario">
            <input type="text" placeholder="Nome Completo" required>
            <input type="text" placeholder="CPF" required>
            <input type="email" placeholder="Email" required>
            <br><br>
            <input type="text" placeholder="Codigo" required>
            <input type="password" placeholder="Senha" required>
            <input type="password" placeholder="Repetir Senha" required>
            <br><br>
            <input type="button" class="btn-success" value="Salvar">
        </form>
    </div>

    <script src="./cadastraFuncionario.js"></script>
</body>
</html>