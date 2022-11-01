<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarController extends Controller
{
    //funcion para validación y envío de codigo postal a la api
    public function index (Request $request) {
        //validacion
        $this->validate($request,[
            'codigo_postal'=>'required|min:5|numeric'
        ]);

        //obtener el zip_code que es la llave primaria de la tabla
    $cp= $request->get('codigo_postal');
        //redirecionando enviando la variable del codigo postal para su busqueda y muestreo
       return redirect()->route('api',[$cp]);
    }

}
