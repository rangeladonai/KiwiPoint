<?php
if (!empty($_GET['msg']))
{
    switch ($_GET['msg'])
    {
        case 991:
            echo "<script>alert('Funcionario Deletado!')</script>";
        break;
        case 990:
            echo "<script>alert('ERRO! não foi possivel deletar o funcionario')</script>";
        break;
    }
}