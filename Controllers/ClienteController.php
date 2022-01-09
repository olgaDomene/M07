<?php
class ClienteController
{
    public function listarClientes(){
        $arrayClientes = Cliente::obtenerClientes();
        require_once(PROY_RUTA."/Views/ClienteView.php");
        $listarClientesView = new ClienteView();
        $listarClientesView -> listarClientes($arrayClientes);
    }
    public function generarPDF(){
        $arrayClientes = Cliente::obtenerClientes();
        require_once(PROY_RUTA."/Views/ClienteView.php");
        $listarClientesView = new ClienteView();
        $listarClientesView -> generarPDFClientes($arrayClientes);

    }

}