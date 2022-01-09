<?php

function autocargar($classname){
    include PROY_RUTA . '/Controllers/' . $classname . '.php';
}

spl_autoload_register('autocargar');
