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
        case 153:
            echo "<script>alert('Funcionario Incluido!')</script>";
        break;
        case 155:
            echo "<script>alert('ERRO! Não foi possivel incluir o funcionario!')</script>";
        break;
        case 454:
            echo "<script>alert('PONTO REGISTRADO!')</script>";
        break;
    }
}