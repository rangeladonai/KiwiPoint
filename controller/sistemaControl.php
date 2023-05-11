<?php


function loadView($view)
{
    $PATH_VIEW = '../view/';
    if (!empty($view)){
        if (strpos($view,'.php')){
            include $PATH_VIEW . $view;
        } else {
            include $PATH_VIEW . $view . '.php';
        }
    }
}   
