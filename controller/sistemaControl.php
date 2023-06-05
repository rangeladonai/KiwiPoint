<?php
//Exibe mensagemBox
if (!empty($_GET['msg'])){
    switch ($_GET['msg'])
    {
        case 200:
            echo '<script>alert("Cadastro de Empresa Realizado!!")</script>';
        break;
        case 400:
            echo '<script>alert("Houve algum erro ao realizar o cadastro da empresa! Tente novamente, ou entre em contato.")</script>';
        break;
    }
}