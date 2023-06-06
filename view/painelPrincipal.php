<?php
//include '../controller/sistemaControl.php';

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

</head>
<style>
    body {
        background: linear-gradient(116.82deg, #64e44a 0%, rgba(191, 228, 118) 59.27%, #59975c 97.92%);
    }

    .e1 {
        padding: 10px;
    }

    .e2 {
        padding: 10px;
    }

    .modal2 {
        background: white;
        height: 750px;
        width: 50%;
        position: relative;
        margin-left: -754px;
        margin-top: -754px;
        float: right;
        border: 1px solid black;
    }

    .bater {
        height: 400px;
        width: 300px;
        position: relative;
        border: 1px solid black;
        border-radius: 10px;
    }

    .bp {
        height: 400px;
        width: 300px;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        border: 1px solid black;
        border-radius: 10px;
    }
</style>

<body>
    <p>PAINEL PRINCIPAL</p><br>


    <div>
        <div class="bp">
            <img src="../imagem/foto_logo_login.png" style="height: 20vh;" alt="pontinho">
            <!-- Informação do usuario -->
            <div class="info_usu">
                <img src="../imagem/imagem_icon.png" style="height: 30hv;" name="ft_funcionario" alt="foto_usuario"> <br>

                <input class='input' type="text" name="responsavel" placeholder="Responsável pela aula" value="<?php echo isset($_SESSION['nomeFuncionario']) ? $_SESSION['nomeFuncionario'] : ''; ?>" readonly>

                <div>
                    <br>

                </div>

                <input type="button" value="Logout" onclick="log()">
            </div>
        </div>
    </div>

    <div>

    </div>

</body>













<script>
    function log() {
        var end = '../view/home.php';
        window.location.href = end;
    }
    var session = document.getElementById('sessionNome');
    sidebar.addEventListener("mouseenter", () => {
        sidebar.classList.remove("close");
    });

    sidebar.addEventListener("mouseleave", () => {
        sidebar.classList.add("close");
    });
</script>

</html>