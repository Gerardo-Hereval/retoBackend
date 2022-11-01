<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Zip_code;

class ApiController extends Controller
{ //funcion para hacer el llamado a la base de datos mediante Route Model Binding
    public function index($zc){
        $zip_code=Zip_code::where('zip_code',$zc)->get();
        dd($zip_code);
        //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays
        $data = array("zip_code"=>$zip_code->zip_code,
            "locality"=>$zip_code->ciudad,
            "federal_entity"=>array("key"=>$zip_code->clave_entidad,
                                    "name"=>$zip_code->entidad,
                                    "code"=>null),
            "settlements"=>array("key"=>$zip_code->identificador_uni_asent,
                                "name"=>$zip_code->asentamiento,
                                "zona_type"=>$zip_code->zona_ubi_asent,
                                "senttlement_type"=>array("name"=>$zip_code->tipo_asentamiento)),
            "municipality"=>array("key"=>$zip_code->clave_municipio,"name"=>$zip_code->municipio));
        //mandamos como reponse el json de la información obtenida de la base de datos
        return response()->json($data);

    }

}
