<?php
namespace App\Controllers;

use App\Libraries\Pdf;

class certificados extends BaseController{

    public function setText($pdf, $texto, $longitud, $x, $y, $r, $g, $b, $fuente, $estilo, $tamanio){
        // Tipo de fuente
        $pdf->SetFont($fuente,$estilo,$tamanio);
        // Color de la fuente
        $pdf->SetTextColor($r, $g, $b);
        // Aqui definimos la posicion en el pdf
        $pdf->setXY($x,$y);
        // La longitud, el texto, la alineación
        $pdf->Cell($longitud,5,mb_convert_encoding($texto,'ISO-8859-1','UTF-8'),0,1,'C');
    }

    public function generarPDF($pdf,$imagePath,$name,$ID,$l,$xf,$yf,$rf,$gf,$bf,$xc,$yc,$rc,$gc,$bc,$sc){
        #Crear el pdf
        # $pdf -> variable que corresponde al pdf que se va a generar
        # $imagePath -> dirección del pdf
        # $name -> nombre de la persona
        # $l -> longitud del texto
        # $xf,$yf -> posición de la firma
        # $rf,$gf,$bf -> colores de la firma
        # $xc,$yc -> posición de la cedula
        #$rc,$gc,$bc -> color de la letra de la cedula
        #$sc -> corresponde a el tamaño de la fuente de la cedula
        // Agregamos fuentes que se van a utilizar
        $pdf->AddFont('ScriptMTBold','','SCRIPTBL.php'); 

        // La imagen de fondo que se va a colocar
        $pdf->Image($imagePath,0,0,280,216);

        //Letra de la firma
        $this->setText($pdf, $name,$l,$xf,$yf,$rf,$gf,$bf,'ScriptMTBold','',25);

        // Letra de la cedula
        $this->setText($pdf, $ID,$l,$xc,$yc,$rc,$gc,$bc,'Arial','',$sc);

        //Generar el pdf
        $pdf->Output('D','Certificado ' . $name . '.pdf');
    }

    public function gencertificado(){

        // Conexión a la base de datos
        $db = \Config\Database::connect();

        // Obtenemos el nombre del formulario
        $ID = $this->request->getGet('alumno');
        
        // Obtenemos el evento del que quiere sacar el certificado
        $even = $this->request->getGet('evento');
        
        //Hacemos la consulta a la base de datos para saber si existe
        //. " and evento = " . $even 
        $query = $db -> query('select nombre from estudiantes where id = ' . $ID . ' and evento = ' . $even);

        //Obtenemos la columna
        $row = $query -> getRow();

        if ($row){
            //Obtenemos el nombre de la columna
            $name = $row->nombre;

            $pdf = new pdf('L','mm','Letter');

            $pdf->AddPage();
        
            $pdf->SetCreator('FACIA');
            
            // Selecciónn de la imagen 
            switch($even) {
                case "1":
                    //  Cambiar al momento de pasarlo al host 'public/img/Certificado.jpg'
                    $imagePath = FCPATH . 'public/img/Certificado.jpg';
                    if (!file_exists($imagePath)){
                        die("Error no se encontro el archivo!");
                    }else{
                        $this->generarPDF($pdf,$imagePath,$name,$ID,160,60,97,161,121,77,70,106,76,77,72,14);
                    }
                    break;
                case "2":
                    $imagePath = FCPATH . 'public/img/Cetificado Mujeres.jpg';
                    if (!file_exists($imagePath)){
                        die("Error no se encontro el archivo!");
                    }else{
                        $this->generarPDF($pdf,$imagePath,$name,$ID,160,60,87,0,0,0,65,96,71,75,78,12);
                    }
                    break;
            }
        }else
        {
            return redirect()->back()->with('error','El usuario no asistió a todas las jornadas!');
        }
    }
    
}
