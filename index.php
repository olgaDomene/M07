<?php
// Definir constante con directorio actual
define('PROY_RUTA', __DIR__);
//Incluim els arxius necessaris 
require  "autoload.php";
require "vendor/autoload.php";
require_once(PROY_RUTA ."/Models/Cliente.php");
session_start();

//Obtenemosel controller que nos viene por la url
if(isset($_GET['controller'])){
    $nombreControlador = $_GET['controller'].'Controller';
}
else{
    //Controller por defecto si no viene el parámetro por la URL
    $nombreControlador = "ClienteController";
}
if(class_exists($nombreControlador)){
    //Se instancia el controlador
    $controlador = new $nombreControlador();

    if(isset($_GET['action'])){
        //Obtenemos la acción a realizar que nos vienes por la url
        $action = $_GET['action'];

    }else{
        //Acción por defecto si no viene el parámetro por la URL
        $action = "listarClientes" ;
    }
    if (method_exists($controlador, $action)){
        //Se llama a la acción del controlador
        $controlador->$action();
    }
    else{
        echo "La accion que buscas no existe";
    }
 
}
else{
    echo "La pagina que buscas no existe";
}
?>








