<?php
include '../public/templates/header.php';
?>
<body>
    <div class="container">
        <form action="" id="homeForm" name="homeForm" method="post">
            
            <div id="buttons">
                <img src="../imagem/foto_logo_login.png" style="height: 241px;margin-left: 15vh;margin-top:1px;padding:1vh;"alt="">
                <input type="button" class="mostrarLoginEmpresa" onclick="mostraLoginEmpresa()" value="Empresa">
                <input type="button" class="mostrarLoginFuncionario" onclick="mostraLoginFuncionario()" value="Funcionario">
            </div>

            <div id="empresa" name="empresa">
                <br>
                
                <br>
                <input type="email" id="emailEmpresa" class="emailEmpresa" name="emailEmpresa" placeholder="Email...">
                <br>
                <input type="password" id="senhaEmpresa" class="senhaEmpresa" name="senhaEmpresa" placeholder="Senha...">
                <br>
                <input type="button" class="entrar_empresa btn btn-success"onclick="empresa()" value="Entrar">
                
                <br>
                <small><a id="cad_empresa" href="">Cadastrar Empresa</a></small>
            </div>

            <div id="funcionario" name="funcionario">                
                <input type="text" id="codFuncionario" class="codFuncionario" name="codFuncionario" placeholder="Código...">
                <br>
                <input type="password" id="senhaFuncionario" class="senhaFuncionario" name="senhaFuncionario" placeholder="Senha...">
                <br>
                <input type="button" class="entrarFuncionario btn btn-success"onclick="funcionario()" value="Entrar">
            </div>
            

        </form>
    </div>

    <script src="../view/home.js"></script>
</body>
</html>