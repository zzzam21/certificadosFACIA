<?php

namespace App\Libraries;  // Espacio de nombres para nuestra librería

require_once ROOTPATH . "fpdf/fpdf.php";  // Importar FPDF desde la carpeta raíz

use FPDF;
class Pdf extends FPDF { }