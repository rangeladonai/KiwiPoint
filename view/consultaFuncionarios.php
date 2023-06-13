<?php
include_once '../inc/menubar.php';
include_once '../inc/msg.php';
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
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nome Completo</th>
                <th>CPF</th>
                <th>Cod</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Edit</th>
                <th>Excl</th>
            </tr>
        <?php
        $_SESSION['idEmpresa'] = 1;
        include_once '../model/funcionarioModel.php';
        $model = new FuncionarioModel();
        $funcionarios = $model->pesquisaFuncionariosDaEmpresa($_SESSION['idEmpresa']);
        if($funcionarios->rowCount()){
            while ($row = $funcionarios->fetch(PDO::FETCH_ASSOC)){ ?>
            <td><?=$row['idFuncionario']?></td>
            <td><?=$row['nomeFuncionario']?></td>
            <td><?=$row['cpf']?></td>
            <td><?=$row['codigo']?></td>
            <td><?=$row['email']?></td>
            <td>*********</td>
            <td><img src="../imagem/edit.png" alt="" style="width: 24px;" title="Editar" onclick="editar(<?php echo $row['idFuncionario']; ?>)"></td>
            <td><img src="../imagem/excl.png" alt="" style="width: 24px;" title="Deletar" onclick="deletar(<?php echo $row['idFuncionario']; ?>)"></td>
    <?php  }
        }
        ?>
        </table>
    </div>

    <script src="./consultaFuncionarios.js"></script>
</body>
</html>