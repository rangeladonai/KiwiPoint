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

    <img src="../imagem/foto_logo_login.png" style="height: 250px;"alt="">
        <form action="../controller/empresaControl.php?action=confirmaCadastraEmpresa" id="cadastraEmpresa" name="cadastraEmpresa" method="post">
            <fieldset class='scheduler-border'>               
            <legend class='scheduler-border'>Informações para login</legend>
            
            <input type="email" name="emailEmpresa" class='emailEmpresa' id="emailEmpresa" placeholder="Email" required>
            <br>  
            <input type="password" name="senhaEmpresa" id="senhaEmpresa" placeholder="Senha para acesso..." required>
            <input type="password" name="senhaEmpresaConfirma" id="senhaEmpresaConfirma" placeholder="Confirme senha" required>
            
            </fieldset>


                <input type="text" name="nomeEmpresa" id="nomeEmpresa" placeholder="Empresa" required>
                <input type="text" name="cnpjEmpresa" id="cnpjEmpresa" placeholder="CNPJ" required>
                <br>
                <input type="text" name="cepEmpresa" id="cepEmpresa" placeholder="CEP" required>
                <br>
                <input type="text" name="ufEmpresa" id="ufEmpresa" placeholder="Estado" required>
                <br>
                <input type="text" name="ruaEmpresa" id="ruaEmpresa" placeholder="Endereço" required readonly>
                <br>
                <input type="text" name="numeroEmpresa" id="numeroEmpresa" placeholder="Número" required>
                <br>
                <input type="text" name="bairroEmpresa" id="bairroEmpresa" placeholder="Bairro" required readonly>
                <br>
                <input type="text" name="cidadeEmpresa" id="cidadeEmpresa" placeholder="Cidade" required readonly>
                <br>
                <input type="text" name="complementoEmpresa" id="complementoEmpresa" placeholder="Complemento">
                <br><hr>
           
            <br>
            <input type="button" name="voltar" id="voltar" value="Cancelar" onclick="voltaHome()">
            <input type="submit" name="confirma" id="confirma" value="Cadastra">
        </form>
    </div>

    <script src="../view/cadastraEmpresa.js"></script>
</body>
</html>