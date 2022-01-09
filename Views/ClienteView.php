<?php
use Spipu\Html2Pdf\Html2Pdf;

class ClienteView
{
    public function listarClientes($arrayClientes){
        //Se incluye el cabecera que es genérico
        require_once(PROY_RUTA ."/Views/GenericoView.php");  
        echo GenericoView::cabecera(); 
        echo "<h1> Vista de clientes</h1>";
        foreach ($arrayClientes as $indice =>$cliente){
            echo "<div class='cliente'>";
            echo "<p>Nombre: {$cliente->getNombre()}</p>";
            echo "<p>Primer apellido:{$cliente->getApellido1()}</p>";
            echo "<p>Segundo apellido: {$cliente->getApellido2()}</p>";
            echo "<p>Sexo: {$cliente->getSexo()}</p>";
            echo "<p>Altura: {$cliente->getAltura()}</p>";
            echo "<p>Peso: {$cliente->getPeso()}</p>";
            echo "</div>";
        }

        echo "<a href= index.php?controller=Cliente&action=generarPDF>Genererar PDF</a>";
        echo GenericoView::pie(); 
    }
    public function generarPDFClientes($arrayClientes)
    {
        $html2pdf = new Spipu\Html2Pdf\Html2Pdf();
        ob_start();
        require_once(PROY_RUTA ."/Views/GenericoView.php");  
        echo GenericoView::cabecera(); 
        foreach ($arrayClientes as $indice =>$cliente){
            echo "<div class='cliente'>";
            echo "<p>Nombre: {$cliente->getNombre()}</p>";
            echo "<p>Primer apellido:{$cliente->getApellido1()}</p>";
            echo "<p>Segundo apellido: {$cliente->getApellido2()}</p>";
            echo "<p>Sexo: {$cliente->getSexo()}</p>";
            echo "<p>Altura: {$cliente->getAltura()}</p>";
            echo "<p>Peso: {$cliente->getPeso()}</p>";
            echo "</div>";
        }
  
       
        echo GenericoView::pie(); 
        $html = ob_get_clean();
        $html2pdf->writeHTML($html);
        $html2pdf->output("pdfGenerado.pdf");

    }



}