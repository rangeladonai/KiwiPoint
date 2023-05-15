<?php
include '../public/templates/header.php';
?>
<body>
    <div class="container">
        <form action="" id="homeForm" name="homeForm" method="post">
            
            <div id="buttons">
                <input type="button" onclick="mostraLoginEmpresa()" value="Empresa">
                <input type="button" onclick="mostraLoginFuncionario()" value="Funcionario">
            </div>

            <div id="empresa" name="empresa">
                <h3>Entrar como Empresa</h3>
                <input type="text" id="emailEmpresa" name="emailEmpresa" placeholder="Email...">
                <br>
                <input type="text" id="senhaEmpresa" name="senhaEmpresa" placeholder="Senha...">
                <br>
                <input type="button" onclick="empresa()" value="Entrar">
                <br>
                <small><a href="">Cadastrar Empresa</a></small>
            </div>

            <div id="funcionario" name="funcionario">
                <h3>Entrar como Funcionário</h3>
                <input type="text" id="codFuncionario" name="codFuncionario" placeholder="Código...">
                <br>
                <input type="text" id="senhaFuncionario" name="senhaFuncionario" placeholder="Senha...">
                <br>
                <input type="button" onclick="funcionario()" value="Entrar">
            </div>

        </form>
    </div>

    <script src="/view/home.js"></script>
</body>
</html>