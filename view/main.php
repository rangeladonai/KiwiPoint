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
        <div class="">
            <form action="../controller/pontoControl.php?action=consultaPontoMes" id="consultaPonto" name="consultaPonto" method="POST">
                <thead>
                    <div id="cabecalho">
                        <label for="mes" id='mes_anos'>Mês:</label>
                        <select name="mes" id="mes">
                            <option value="">Todos</option>
                            <option value="1" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '1') echo 'selected'; ?> >Janeiro</option>
                            <option value="2" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '2') echo 'selected'; ?>  >Fevereiro</option>
                            <option value="3" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '3') echo 'selected'; ?>  >Março</option>
                            <option value="4" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '4') echo 'selected'; ?> >Abril</option>
                            <option value="5" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '5') echo 'selected'; ?> >Maio</option>
                            <option value="6" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '6') echo 'selected'; ?> >Junho</option>
                            <option value="7" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '7') echo 'selected'; ?> >Julho</option>
                            <option value="8" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '8') echo 'selected'; ?> >Agosto</option>
                            <option value="9" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '9') echo 'selected'; ?> >Setembro</option>
                            <option value="10" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '10') echo 'selected'; ?> >Outubro</option>
                            <option value="11" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '11') echo 'selected'; ?> >Novembro</option>
                            <option value="12" <?php if(!empty($_SESSION['mes']) && $_SESSION['mes'] == '12') echo 'selected'; ?> >Dezembro</option>
                        </select>
                        <?php
                        if ($_SESSION['situacao'] == 'logouComoEmpresa'): ?>
                            <select name="funcionario" id="funcionario">
                                <option value="" name="funcionario">Todos Funcionarios</option>
                                <?php
                                    require '../model/funcionarioModel.php';
                                    $funcionarioModel = new FuncionarioModel();
                                    $funcionarios = $funcionarioModel->pesquisaFuncionariosDaEmpresa($_SESSION['idEmpresa']);
                                    if ($funcionarios->rowCount()){
                                        while ($row = $funcionarios){
                                            echo "<option value=" . $row['idFuncionario'] . ">" . $row['nomeFuncionario'] . " - " . $row['cpf'] . "</option>";
                                        }
                                    }
                                ?>
                            </select>
                        <?php endif; ?>
                        <input type="button" onclick="alteraConsulta()" value="Pesquisar">
                        <img src="../imagem/pdf.png" title="Montar PDF" onclick="pdf()" style="float: right; cursor:pointer; max-width: 32px;">
                    </div>
                </thead>

                <table class="table">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Data/Hora</th>
                        <th scope="col">Funcionario</th>
                    </thead>
                    
                    <tbody id="content">
                    <?php
                        require '../model/pontoModel.php';
                        $pontoModel = new PontoModel();
                        $pesquisaPontos = $pontoModel->pesquisaPontos($_SESSION['action'], $_SESSION['id'], $_SESSION['mes']);
                
                        if ($pesquisaPontos->rowCount()){
                            while ($row = $pesquisaPontos->fetch(PDO::FETCH_ASSOC)){
                                echo '<tr>'
                                    .'<td class="" scope="row">' . $row['idPonto'] . '</td>'
                                    .'<td class="" scope="row">' . $row['dataPonto'] . '</td>'
                                    .'<td class="" scope="row">' . $row['nomeFuncionario'] . '</td>'
                                    .'</tr>';
                            }
                        } else {
                            echo '<td class="" scope="row" style="color: red"> NÃO HOUVE APONTAMENTOS REFERENTE AO MÊS SELECIONADO. </td>';
                        }
                        ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>

    <script src="../view/main.js">
     

    </script>
</body>
</html>