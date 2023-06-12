<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script href='./sideBars.js'></script>
</head>

<body>
    <div class="sidebar">
        <ul class="caixa-sidebar">
            <img src="../imagem/foto_logo_login.png" style="height:124px;position: relative;left: 1vh;bottom: 40px;"
                alt="" onclick="teste()">
            <!--     <li>
                <a href="#">

                    <i class='bx bx-calendar-plus '></i>
                    <span class="text nav-text ">Cadastro de Ponto</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class='bx bx-search'></i>
                    <span class="text nav-text ">Consulta de Ponto</span>
                </a>
            </li>
            <li><a href="#">Cadastro Funcionários</a></li>
        </ul>-->
    </div>

    <div class="d-flex" id="wrapper">

        <div  id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">

                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Cadastro de Ponto</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Consulta de Ponto</a>

                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
    </div>
    </div>
</body>
<script>
    $("#sidebar-wrapper").hide();
    function teste() {
        var sidebar = $("#sidebar-wrapper");

        if (sidebar.is(":visible")) {
            sidebar.hide();
        } else {
            sidebar.show();
        }
    }
</script>

</html>