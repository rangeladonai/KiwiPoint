<?php
//define o valor de action
$action = '';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
} else if (!empty($_POST['action'])){
    $action = $_POST['action'];
}

//verifica se action NÃO está vazia, e verifica se o metodo dito em action, existe na classe instanciada
if (!empty($action)){
    if (method_exists($classe, $action)){   //ao incluir este arquivo em um arquivo com classe, instaciar a classe com variavel $classe
        call_user_func(array($classe, $action));
    } else {
        require '../view/404.php';
    }
}
