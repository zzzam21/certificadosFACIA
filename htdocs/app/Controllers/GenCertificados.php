<?php

namespace App\Controllers;

class GenCertificados extends BaseController
{
    public function certificated()
    {
        $data = ['titulo' => 'Generar Certificado'];
        return view('certificatedViews/genCert',$data);
    }
    public function certificatedMujeres(){
        $data = ['titulo' => 'Certificado Mujeres'];
        return view('certificatedViews/mujCert', $data);
    }
}