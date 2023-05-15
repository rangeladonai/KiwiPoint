<?php
$action = $_REQUEST['action'];
if (!empty($action)){
    if (function_exists($action)){
        call_user_func($action);
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////
function cadastraEmpresa()
{
    include '../view/cadastraEmpresa.php';
} 