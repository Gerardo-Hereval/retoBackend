<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Zip_code;

class ApiController extends Controller

{
    //funcion para hacer el llamado a la base de datos mediante eloquents
    public function zip_codes(Zip_code $zc){
        //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays

        @$data = array("zip_code"=>$zc['zip_code'],
            "locality"=>$zc['ciudad'],
            "federal_entity"=>array("key"=>$zc['clave_entidad'],
                                    "name"=>$zc['entidad'],
                                    "code"=>null),
            "settlements"=>array("key"=>$zc['identificador_uni_asent'],
                                "name"=>$zc['asentamiento'],
                                "zona_type"=>$zc['zona_ubi_asent'],
                                "senttlement_type"=>array("name"=>$zc['tipo_asentamiento'])),
            "municipality"=>array("key"=>$zc['clave_municipio'],"name"=>$zc['municipio']));

        //mandamos como reponse el json de la información obtenida de la base de datos
        return response()->json($data);

    }

}
