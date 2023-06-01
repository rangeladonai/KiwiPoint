<?php
//include '../controller/sistemaControl.php';
include '../connection.inc.php';
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
    
</head>

<body>
    <div class="container">
        <div class="">
            <form action="../controller/pontoControl.php?action=consultaPontoMes" id="consultaPonto" name="consultaPonto" method="POST">
                <thead>
                    <div id="cabecalho">
                        <?=var_dump($_REQUEST)?>
                        <label for="mes">Mês</label>
                        <select name="mes" id="mes">
                            <option value="">Selecione</option>
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <input type="button" onclick="alteraMes()" value="Pesquisar">
                        <a href="../controller/pdfControl.php?action=montaPDF" style="float:right;"><img src="../imagem/pdf.png" title="Baixar PDF do Mês"></a>
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
                        $_SESSION['id'] = 1; //APENAS PARA TESTE, DELETAR ESSA LINHA
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
                        }
                        ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>

    <script src="../view/consultaPonto.js"></script>
</body>
</html>