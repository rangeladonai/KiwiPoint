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
    <link rel="stylesheet" href="../css/cadastraEmpresa.css">
</head>
<body>
    <div class="container">

        <img src="../imagem/foto_logo_login.png" style="height: 168px;margin-left:96px" alt="">
        <form action="../controller/empresaControl.php?action=confirmaCadastraEmpresa" id="cadastraEmpresa"
            name="cadastraEmpresa" method="post">
            <fieldset class='scheduler-border teste'>
                <p>Informações do Login</p>
                <hr>
                <label id="label_cnpj" for="">CNPJ</label>
                <br>
                <input type="text" name="cnpjEmpresa" id="cnpjEmpresa" style="width: 167px;" placeholder="CNPJ" required>
                <br>
                <label for="" id="label_email">E-mai</label>
                <label for="" id="label_senha">Senha</label>
                <label for="" id="label_senhaConf">Confirme Senha</label>
                <br>
                <input type="email" name="emailEmpresa" class='emailEmpresaCad' id="emailEmpresa" placeholder="Email"
                    required>

                <input type="password" class="senhaEmpresaCad" name="senhaEmpresa" maxlength="40" id="senhaEmpresa" placeholder="Senha" required>
                <input type="password" name="senhaEmpresaConfirma" id="senhaEmpresaConfirma"
                    placeholder="Confirme senha" required>

            </fieldset>

            <fieldset class='scheduler-border'>
                <p>Informações Adicionais</p>
                <hr>
                <label id="label_empresa" for="">Empresa</label>
                <label id="label_telefone" for="">Telefone</label>
                <br>
                
                <input type="text" name="nomeEmpresa" id="nomeEmpresa" placeholder="Empresa" required>
                <input type="text" name="telefoneEmpresa" class="telefoneEmpresa"id="telefoneEmpresa" placeholder="Telefone" required>
                <br>                                            
                <input type="text" name="cepEmpresa" style="width: 104px;"id="cepEmpresa" placeholder="CEP" required>
                <input type="text" name="ufEmpresa" id="ufEmpresa" placeholder="Uf" required>                
                <input type="text" name="cidadeEmpresa" id="cidadeEmpresa" placeholder="Cidade" required readonly>
                
                <input type="text" name="bairroEmpresa" id="bairroEmpresa" placeholder="Bairro" required readonly>
                
                <br>
                <input type="text" name="ruaEmpresa" id="ruaEmpresa" class="ruaEmpresa"placeholder="Endereço" required readonly>
                <input type="text" name="numeroEmpresa" id="numeroEmpresa" placeholder="N°" required>
                

                <input type="text" name="complementoEmpresa" class="complementoEmpresa" id="complementoEmpresa" placeholder="Complemento">


                <br>
            </fieldset>

            <input type="button" class="btn btn-danger" name="voltar" id="voltar" value="Cancelar"
                onclick="voltaHome()">
            <input type="submit" class="btn btn-success " name="confirma" id="confirma" value="Cadastra">

        </form>
    </div>

    <script src="../view/cadastraEmpresa.js"></script>
</body>

</html>