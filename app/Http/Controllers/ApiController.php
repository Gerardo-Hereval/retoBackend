<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Zip_code;



class ApiController extends Controller
{ //funcion para hacer el llamado a la base de datos mediante Eloquents
     public function index($zc){
        //realizamos la busqueda de información
        $zip_code=Zip_code::where('zip_code',$zc)->get();
        if(isset($zip_code)){
            //lo ingresamos a un for por los codigos postales que tienen más asentamientos
                //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays
                $data[0] = array("zip_code"=>$zip_code[0]->zip_code,
                    "locality"=>$zip_code[0]->ciudad);
                for ($i = 0,$long=count($zip_code);$i<$long;++$i){
                    $data1[0]=array(
                        "federal_entity"=>array("key"=>$zip_code[$i]->clave_entidad,
                            "name"=>$zip_code[$i]->entidad,
                            "code"=>null),
                        "settlements"=>array("key"=>$zip_code[$i]->identificador_uni_asent,
                            "name"=>$zip_code[$i]->asentamiento,
                            "zona_type"=>$zip_code[$i]->zona_ubi_asent,
                            "senttlement_type"=>array("name"=>$zip_code[$i]->tipo_asentamiento)));
                $data2[0]=array("municipality"=>array("key"=>$zip_code[0]->clave_municipio,"name"=>$zip_code[0]->municipio));
                //mandamos como reponse el json de la información obtenida de la base de datos
            }
            return response()->json($data,$data1,$data2);
        }

    }

}
