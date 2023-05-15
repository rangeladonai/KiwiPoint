<?php
include_once '../public/templates/header.php';
?>
<body>
    <div class="container">
        <form action="" id="cadastraEmpresa" name="cadastraEmpresa">
            <input type="text" name="nomeEmpresa" id="nomeEmpresa" placeholder="Empresa" required>
            <br>
            <input type="text" name="cnpjEmpresa" id="cnpjEmpresa" placeholder="CNPJ" required>
            <br>
            <input type="text" name="cepEmpresa " id="cepEmpresa" placeholder="CEP" required>
            <br>
            <input type="text" name="ruaEmpresa" id="ruaEmpresa" placeholder="Rua" required readonly>
            <br>
            <input type="text" name="numeroEmpresa" id="numeroEmpresa" placeholder="Número" required readonly>
            <br>
            <input type="text" name="bairroEmpresa" id="bairroEmpresa" placeholder="Bairro" required readonly>
            <br>
            <input type="text" name="cidadeEmpresa" id="cidadeEmpresa" placeholder="Cidade" required readonly>
            <br><hr>
            <input type="text" name="emailEmpresa" id="emailEmpresa" placeholder="Email" required>
            <br>
            <input type="text" name="senhaEmpresa" id="senhaEmpresa" placeholder="Senha para acesso..." required>
            <br>
            <input type="button" name="voltar" id="voltar" value="Cancelar" onclick="voltaHome()">
            <input type="button" name="confirma" id="confirma" value="Cadastra" onclick="confirmaCadastraEmpresa()">
        </form>
    </div>

    <script src="../view/cadastraEmpresa.js"></script>
</body>
</html>