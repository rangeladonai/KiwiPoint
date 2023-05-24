<?php
include '../controller/sistemaControl.php';
?>

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
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <div class="container">
        
        <div id="relogio" name="relogio">
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
                <small><a id="cad_empresa" href="../controller/empresaControl.php?action=cadastraEmpresa">Cadastrar Empresa</a></small>
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