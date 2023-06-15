<?php
if (!isset($_SESSION)){
    session_start();
}
include_once '../inc/menubar.php';
include_once '../connection.inc.php';
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
        <form action="<?php if(!empty($_SESSION['operacao'])){ echo '../controller/funcionarioControl.php?action=confirmaEditaFuncionario'; } else {echo '../controller/funcionarioControl.php?action=cadastraFuncionario';} ?>" id="cadastraFuncionario" method="POST">
            <input type="hidden" name="idFuncionario" value="<?php if (!empty($_SESSION['idFuncEdit'])) echo $_SESSION['idFuncEdit']?>">
            <input type="text" placeholder="Nome Completo" name="nomeFuncionario" value="<?php echo !empty($_SESSION['nomeFuncEdit']) ? $_SESSION['nomeFuncEdit'] : '' ?>" required>
            <input type="text" placeholder="CPF" name="cpfFuncionario" value="<?php echo !empty($_SESSION['cpfFuncEdit']) ? $_SESSION['cpfFuncEdit'] : '' ?>" required>
            <input type="email" placeholder="Email" name="emailFuncionario" value="<?php echo !empty($_SESSION['emailFuncEdit']) ? $_SESSION['emailFuncEdit'] : '' ?>" required>
            <br><br>
            <input type="text" placeholder="Codigo" name="codigoFuncionario" value="<?php echo !empty($_SESSION['codFuncEdit']) ? $_SESSION['codFuncEdit'] : '' ?>" required>
            <input type="password" placeholder="Senha" name="senhaFuncionario" value="<?php echo !empty($_SESSION['senFuncEdit']) ? $_SESSION['senFuncEdit'] : '' ?>"required>
            <input type="password" placeholder="Repetir Senha" name="senhaFuncionarioConfirma" required>
            <br><br>
            <input type="submit" class="btn-success" value="Salvar">
        </form>
    </div>

    <script src="../view/cadastraFuncionario.js"></script>
</body>
</html>