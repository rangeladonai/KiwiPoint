<?php
$action = '';
if (!empty($_GET['action'])){
    $action = $_GET['action'];
} else if (!empty($_POST['action'])){
    $action = $_POST['action'];
}
if (!empty($action)){
    if (method_exists($classe, $action)){
        call_user_func(array($classe, $action));
    }
}
