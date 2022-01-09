<?php

class GenericoView{
    public static function cabecera(){
        return '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link type="text/css" rel ="stylesheet" href="Views/css/estilos.css">
            <title>La cabecera de mi empresa</title>
        </head>
        <body>
            <div id="cabecera"> Soy la cabecera en Clase </div>
       
        ';
    }
    public static function pie(){
        return '<div id="pie">
            Soy el pie
        
        </div>
        </body>
        </html>';
    }
    
}