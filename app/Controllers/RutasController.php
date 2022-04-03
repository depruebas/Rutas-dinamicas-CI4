<?php

namespace App\Controllers;

class RutasController extends BaseController
{
    public function index()
    {

        $modelRutas = new \App\Models\RutasModel();

        echo "Rutas:<br><br>";

        foreach ( $modelRutas->GetRoutes() as $row)
        {
            echo "<a href='".$row->slug."'>".$row->name . "</a><br>";
        }

    }

    public function customRoutes()
    {
        print_r( "<pre>" . print_r( $this->request->uri->getSegments(), true) . "</pre>");
    }
}