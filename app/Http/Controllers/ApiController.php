<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Zip_code;


class ApiController extends Controller
{
    public function index($zc)
    {
        //realizamos la busqueda de información
        /** @var object $zip_code */
        $zip_code = new Zip_code;
        $zip_code = Zip_code::where('zip_code',$zc)->get();
        if(isset($zip_code)){
        //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays
        $data= array("zip_code" => $zip_code[0]->zip_code,
            "locality" => $zip_code[0]->ciudad,
            "federal_entity" => array("key" => $zip_code[0]->clave_entidad,
                "name" => $zip_code[0]->entidad,
                "code" => null));
        //lo ingresamos a un for por los codigos postales que tienen más asentamientos
        for ($i = 0, $long = count($zip_code); $i < $long; ++$i) {
            $data1[$i] = array("key" => $zip_code[$i]->identificador_uni_asent,
                "name" => $zip_code[$i]->asentamiento,
                "zona_type" => $zip_code[$i]->zona_ubi_asent,
                "senttlement_type" => array("name" => $zip_code[$i]->tipo_asentamiento));
        };
        //continuamos obteniendo la data en otro array
        $data2=array("municipality" => array("key" => $zip_code[0]->clave_municipio, "name" => $zip_code[0]->municipio));
        }
        $zip_code=null;
        //creamos una variable con las arrays para imprimirlo
        $datas = $data + array("settlements"=>$data1) + $data2;
        return response()->json($datas);
    }
    //mandamos como reponse el json de la información obtenida de la base de dato
}
