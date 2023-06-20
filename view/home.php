<?php
session_start();
if (session_status() === PHP_SESSION_ACTIVE) {
    session_destroy();
}
require '../controller/sistemaControl.php';
if (isset($_GET['msg'])){
    if ($_GET['msg'] == '1'){
        echo "<script>alert('PONTO REGISTRADO')</script>";
    } else if ($_GET['msg'] == '0'){
        echo "<script>alert('ERRO!! dados incorretos. O ponto não foi registrado!')</script>";
    }else if ($_GET['msg'] == '303'){
        echo "<script>alert('ERRO!! Empresa não encontrada!')</script>";
    } else if ($_GET['msg'] == '409'){
        echo "<script>alert('ERRO!! Funcionario Inativado pela empresa!')</script>";
    }
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
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <div class="container">

        <div id="relogio" name="relogio">
        </div>

        <form action="" id="homeForm" name="homeForm" method="post">
            <img src="../imagem/logo-pdf.png" alt="" id="logo">
            <hr>
            <div id="buttons">
                <input type="button" class="mostrarLoginEmpresa" onclick="mostraLoginEmpresa()" value="Empresa">
                <input type="button" class="mostrarLoginFuncionario" onclick="mostraLoginFuncionario()" value="Funcionario">
                <input type="button" class="mostrarPinPonto" onclick="mostraPinPonto()" value="Registrar">
            </div>

            <div id="empresa" name="empresa">
                <br>
                <br>
                <span style="text-align: center; display:block; margin:0 auto;">Entrar Empresa</span>
                <input type="email" id="emailEmpresaLogin" class="emailEmpresaLogin" name="emailEmpresaLogin" placeholder="Email..." required>
                <br>
                <input type="password" id="senhaEmpresaLogin" class="senhaEmpresaLogin" name="senhaEmpresaLogin" placeholder="Senha..." required>
                <br>
                <input type="button" class="entrar_empresa btn btn-success" onclick="empresa()" value="Entrar">
                <br>
                <small><a id="cad_empresa" href="../controller/empresaControl.php?action=cadastraEmpresa">Cadastrar Empresa</a></small>
            </div>

            <div id="funcionario" name="funcionario">
                <span style="text-align: center; display:block; margin:0 auto;">Entrar Funcionario</span>
                <input type="text" id="codFuncionario" class="codFuncionario" name="codFuncionario" placeholder="Email..." required>
                <br>
                <input type="password" id="senhaFuncionario" class="senhaFuncionario" name="senhaFuncionario" placeholder="Senha..." required>
                <br>
                <input type="button" class="entrarFuncionario btn btn-success" onclick="funcionario()" value="Entrar">
            </div>

            <div id="pin" name="pin">
                <span style="text-align: center; display:block; margin:0 auto;">Registrar Ponto</span>
                <input type="text" id="codFuncionario2" class="codFuncionario" name="codFuncionario2" placeholder="Código..." required>
                <br>
                <input type="password" id="senhaFuncionario2" class="senhaFuncionario" name="senhaFuncionario2" placeholder="Senha..." required>
                <br>
                <input type="button" class="entrarPin btn btn-success" onclick="pin()" value="Registrar">
            </div>
        </form>
    </div>

    <script src="../view/home.js"></script>
</body>

</html>