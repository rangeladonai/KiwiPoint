<?php
include '../public/templates/header.php';
include '../controller/sistemaControl.php';
?>

<body>
    <div class="container">
        
        <div id="relogio">

            <script>
                setInterval(function () {
                    const time = document.querySelector('#relogio');
                    var date = new Date();
                    var hora = date.getHours();
                    var min = date.getMinutes();
                    var seg = date.getSeconds();
                    var formatHor = hora.toString().padStart(2, '0');
                    var formatMin = min.toString().padStart(2, '0');
                    var formatSeg = seg.toString().padStart(2, '0');
                    time.textContent = formatHor + ':' + formatMin + ':' + formatSeg;
                })
            </script>
        </div>

        <form action="" id="homeForm" name="homeForm" method="post">
            <img src="../imagem/foto_logo_login.png" style="height: 250px;" alt="">
            <br>
            <div id="buttons">
                <input type="button" class="mostrarLoginEmpresa" onclick="mostraLoginEmpresa()" value="Empresa">
                <input type="button" class="mostrarLoginFuncionario" onclick="mostraLoginFuncionario()"
                    value="Funcionario">
                <input type="button" class="mostrarPinPonto" onclick="mostraPinPonto()" value="Registrar">
            </div>

            <div id="empresa" name="empresa">
                <br>

                <br>
                <input type="email" id="emailEmpresaLogin" class="emailEmpresaLogin" name="emailEmpresaLogin"
                    placeholder="Email...">
                <br>
                <input type="password" id="senhaEmpresaLogin" class="senhaEmpresaLogin" name="senhaEmpresaLogin"
                    placeholder="Senha...">
                <br>
                <input type="button" class="entrar_empresa btn btn-success" onclick="empresa()" value="Entrar">

                <br>
                <small><a id="cad_empresa" href="../controller/empresaControl.php?action=cadastraEmpresa">Cadastrar
                        Empresa</a></small>
            </div>

            <div id="funcionario" name="funcionario">
                <input type="text" id="codFuncionario" class="codFuncionario" name="codFuncionario"
                    placeholder="Código...">
                <br>
                <input type="password" id="senhaFuncionario" class="senhaFuncionario" name="senhaFuncionario"
                    placeholder="Senha...">
                <br>
                <input type="button" class="entrarFuncionario btn btn-success" onclick="funcionario()" value="Entrar">
            </div>
            <div id="pin" name="pin">

                <input type="text" id="codFuncionario" class="codFuncionario" name="codFuncionario"
                    placeholder="Código...">
                <br>
                <input type="password" id="senhaFuncionario" class="senhaFuncionario" name="senhaFuncionario"
                    placeholder="Senha...">
                <br>
                <input type="button" class="entrarPin btn btn-success" onclick="pin()" value="Registrar">
            </div>


        </form>
    </div>

    <script src="../view/home.js">
        const cadEmpresa = document.querySelector('.cadastrarEmpresa');
        const caixabranca = document.querySelector('.caixa-branca-login');

        cadEmpresa.onclick = function () {
            caixabranca.classList.add('active');
        }
    </script>
</body>

</html>