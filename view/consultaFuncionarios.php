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
</style>
<body>
    <div class="container">
        <button class="btn btn-success" style="float: right;"><a href="../controller/funcionarioControl.php?action=cadastraFuncionarioPage" id="adicionar">Cadastrar</a></button>
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
        include_once '../model/funcionarioModel.php';
        $model = new FuncionarioModel();
        $funcionarios = $model->pesquisaFuncionariosDaEmpresa($_SESSION['idEmpresa']);
        if($funcionarios->rowCount()){
            while ($row = $funcionarios->fetch(PDO::FETCH_ASSOC)){ ?>
            <tr>
            <td><?=$row['idFuncionario']?></td>
            <td><?=$row['nomeFuncionario']?></td>
            <td><?=$row['cpf']?></td>
            <td><?=$row['codigo']?></td>
            <td><?=$row['email']?></td>
            <td>*********</td>
            <?php 
            if ($row['statu'] == 1){
                echo "<td><img src='../imagem/edit.png' style=width: 21px;' title='Inativar' onclick='editar(" . $row['idFuncionario']  . ")'></td>";
                echo "<td><img src='../imagem/excl.png' style=width: 21px;' title='Inativar' onclick='deletar(" . $row['idFuncionario']  . ")'></td>";
            } else {
                echo '<td><span style="color:red">Inativado</span></td>';
                echo "<td><input type='button' onclick='reativar(" . $row['idFuncionario']  . ")' value='Re-ativar'></td>";
            }
            ?>
            </tr>
    <?php  }
        }
        ?>
        </table>
    </div>

    <script src="../view/consultaFuncionarios.js"></script>
</body>
</html>