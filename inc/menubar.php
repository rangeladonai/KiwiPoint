<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    .menu {
        display: flex;
        align-items: center;
        background-color: whitesmoke;
        padding: 10px;
    }

    .logo {
        width: 90px;
    }

    .nav-item{
        padding-left: 10px;
        position: relative;
        left: 20%;
    }

    button{
        margin-left: 20px;
    }
    .botoes{
        margin-left: 60px;
    }
</style>

<html>
<div class="menu">
    <div class="logo">
        <a href="../view/main.php"><img src="../imagem/logo-pdf.png" alt="" id="logo"></a>
    </div>
    <div class="botoes">
        <?php if ($_SESSION['situacao'] == 'logouComoEmpresa'): ?>
        <button class="button is-link is-light"><a href="../view/dadosEmpresa.php">Empresa</a></button>
        <button class="button is-link is-light"><a href="../view/consultaFuncionarios.php">Funcionarios</a></button>
        <?php endif; ?>
        <?php if ($_SESSION['situacao'] == 'logouComoFuncionario'): ?>
        <button class="button is-link is-light" onclick="registraPontoLogado()">Registrar Ponto</button>
        <?php endif; ?>
        <button class="button is-warning is-light" style="float: right;"><a href="../view/home.php">Logout</a></button>
    </div>
    <span style="margin-left: 50%">User: <?=$_SESSION['user']?></span>
</div>

<script>
    function registraPontoLogado(){
        if (window.confirm('Deseja Registrar Ponto? Pontos não podem ser excluidos ou editados por funcionarios')){
            window.location.href = '../controller/pontoControl.php?action=registraPontoLogado';
        }
    }
</script>
</html>