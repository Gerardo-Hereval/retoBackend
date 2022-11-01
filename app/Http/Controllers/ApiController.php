<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Zip_code;

class ApiController extends Controller
{ //funcion para hacer el llamado a la base de datos mediante Route Model Binding
    public function index($zc){
        //realizamos la busqueda de información
        $zip_code=Zip_code::where('zip_code',$zc)->get();
        //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays
        $data = array("zip_code"=>$zip_code[0]->zip_code,
            "locality"=>$zip_code[0]->ciudad,
            "federal_entity"=>array("key"=>$zip_code[0]->clave_entidad,
                                    "name"=>$zip_code[0]->entidad,
                                    "code"=>null),
            "settlements"=>array("key"=>$zip_code[0]->identificador_uni_asent,
                                "name"=>$zip_code[0]->asentamiento,
                                "zona_type"=>$zip_code[0]->zona_ubi_asent,
                                "senttlement_type"=>array("name"=>$zip_code[0]->tipo_asentamiento)),
            "municipality"=>array("key"=>$zip_code[0]->clave_municipio,"name"=>$zip_code[0]->municipio));
        //mandamos como reponse el json de la información obtenida de la base de datos
        return response()->json($data);
    }

}
