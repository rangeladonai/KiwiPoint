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
    </style>
</head>
<body>
    <div class="container">
        <div id="cabecalho-empresa">
            <h1 id="tituloPDF">Folha de Ponto</h1>
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
            </div>
        </div>
        <br>
        <div id="conteudo-pontos">
        <h1>Historico de Apontamentos</h1>
        <div id="pontos">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Data/Hora</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
            </table>
            <tbody>
            </tbody>
        </div>
    </div>
    <span>Colaborador:__________________________________</span>
    <span style="float: right;">RH:__________________________________</span>
</body>
</div>
</html>
