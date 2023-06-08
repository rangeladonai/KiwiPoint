<?php
function validaData($data)
{
    if ($data < 10){
        $data = '0' . $data;
    }
    return $data;
}
?>
<script>
    alert('Pressione CTRL + P para abrir as opções de impressão');
</script>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .labelCampo {
            font-weight: bold;
        }
        #cabecalho-empresa {
            text-align: center;
            border: 1px solid black;
            padding: 10px;
        }
        h1 {
            text-align: center;
        }
        #conteudo-pontos {
            border: 1px solid black;
        }
        #table-info-empresa{
            text-align: center;
        }
        #logo{
            width: 150px;
        }
        #cabecalho-pdf{
            padding: 20px;
            text-align: center;
            display: flex;
        }
        #tituloPDF{
            position: relative;
            margin: 0 auto;
            left: -70px;
        }
    </style>
</head>
<body>
    <br>
    <div class="container">
        <div id="cabecalho-empresa">
            <div id="cabecalho-pdf">
                <img src="../imagem/logo-pdf.png" alt="" id="logo">
                <h1 id="tituloPDF">Folha de Ponto</h1>
            </div>
            <div id="info-empresa">
                <table class="table" id="table-info-empresa">
                    <tr>
                        <td>
                            <label for="" class="labelCampo">Empresa:</label>
                            <label for=""><?=$_SESSION['nomeEmpresa']?></label>
                            <label for="" class="labelCampo">CNPJ:</label>
                            <label for=""><?=$_SESSION['cnpj']?></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="" class="labelCampo">CEP:</label>
                            <label for=""><?=$_SESSION['cep']?></label>
                            <label for="" class="labelCampo">Numero:</label>
                            <label for=""><?=$_SESSION['numero']?></label>
                        </td>
                    </tr>
                </table>
                <table class="table" id="table-info-empresa">
                    <tr>
                        <td>
                            <label for="" class="labelCampo">Colaborador:</label>
                            <label for=""><?=$_SESSION['nomeFuncionario']?></label>
                            <label for="" class="labelCampo">CPF:</label>
                            <label for=""><?=$_SESSION['cpf']?></label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <br>

        <div id="conteudo-pontos">
        <br>
        <h1>Historico de Apontamentos</h1>
        <hr>
        <div id="pontos">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Colaborador</th>
                    </tr>
                </thead>
            <tbody>
            <?php foreach ($conteudo as $row):?>
            <tr>
                <td>
                    <?=$row['idPonto']?>
                </td>
                <td>
                    <?=validaData($row['diaPonto']) . '/' . validaData($row['mesPonto']) . '/' . validaData($row['anoPonto'])?>
                </td>
                <td>
                    <?=$row['hora']?>
                </td>
                <td>
                    <?=$row['nomeFuncionario']?>
                </td>
            </tr>
            <?php endforeach; ?>
            </table>
            </tbody>
        </div>
    </div>
    <div id="assinatura">
        <br><br>
        <span>Colaborador:__________________________________</span>
        <span style="float: right;">Empregador:__________________________________</span>
    </div>
    <br><br><br><br>
    <small style="color: grey; justify-content: center; display: flex;">©created by KiwiPoint</small>
    <br>
    
</body>
</div>
</html>
