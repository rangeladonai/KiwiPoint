<?php
include_once '../public/templates/header.php';
?>
<body>
    <div class="container">
        <form action="../controller/empresaControl.php?action=confirmaCadastraEmpresa" id="cadastraEmpresa" name="cadastraEmpresa" method="post">
            <input type="text" name="nomeEmpresa" id="nomeEmpresa" placeholder="Empresa" required>
            <br>
            <input type="text" name="cnpjEmpresa" id="cnpjEmpresa" placeholder="CNPJ" required>
            <br>
            <input type="text" name="cepEmpresa" id="cepEmpresa" placeholder="CEP" required>
            <br>
            <input type="text" name="ufEmpresa" id="ufEmpresa" placeholder="Estado" required>
            <br>
            <input type="text" name="ruaEmpresa" id="ruaEmpresa" placeholder="Rua" required readonly>
            <br>
            <input type="text" name="numeroEmpresa" id="numeroEmpresa" placeholder="Número" required>
            <br>
            <input type="text" name="bairroEmpresa" id="bairroEmpresa" placeholder="Bairro" required readonly>
            <br>
            <input type="text" name="cidadeEmpresa" id="cidadeEmpresa" placeholder="Cidade" required readonly>
            <br>
            <input type="text" name="complementoEmpresa" id="complementoEmpresa" placeholder="Complemento">
            <br><hr>
            <input type="email" name="emailEmpresa" id="emailEmpresa" placeholder="Email" required>
            <br>
            <input type="password" name="senhaEmpresa" id="senhaEmpresa" placeholder="Senha para acesso..." required>
            <input type="password" name="senhaEmpresaConfirma" id="senhaEmpresaConfirma" placeholder="Confirme senha" required>
            <br>
            <input type="button" name="voltar" id="voltar" value="Cancelar" onclick="voltaHome()">
            <input type="submit" name="confirma" id="confirma" value="Cadastra">
        </form>
    </div>

    <script src="../view/cadastraEmpresa.js"></script>
</body>
</html>