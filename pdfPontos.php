<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
.labelCampo{
    font-weight: bold;
}
#cabecalho-empresa{
    text-align: center;
    border: 1px solid black;
    padding: 10px;
}
h1{
    text-align: center;
}
#conteudo-pontos{
    border: 1px solid black;
}
</style>
<html>
<div class="container">
    <div id="cabecalho-empresa" id="cabecalho-empresa">
        <h1 id="tituloPDF">Folha de Ponto</h1>
            <div id="info-empresa">
            <td>
                <label for="" class="labelCampo">Empresa:</label>
                <label for=""><?=$_SESSION['nomeEmpresa']?></label>
                <label for="" class="labelCampo">CNPJ:</label>
                <label for=""><?=$_SESSION['cnpj']?>'</label>
            </td>
            <br>
            <td>
                <label for="" class="labelCampo">CEP:</label>
                <label for=""><?=$_SESSION['cep']?></label>
                <label for="" class="labelCampo">Numero:</label>
                <label for=""><?=$_SESSION['numero']?></label>
            </td>
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
            <?php
            echo '<tbody class="">';
            for ($i = 0; $i < count($conteudo); $i++){
                echo '<tr>'
                    . '<td>'
                    . $conteudo[$i]['idPonto']
                    . '</td>'
                    . '<td>'
                    . $conteudo[$i]['dataPonto']
                    . '</td>'
                    . '<td>'
                    . $conteudo[$i]['nomeFuncionario']
                    . '</td>';
            }
            ?>
            </tbody>
        </div>
    </div>
</div>
</html>
