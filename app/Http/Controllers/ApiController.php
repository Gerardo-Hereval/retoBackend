<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Federal_entity;
use App\Models\Municipality;
use App\Models\Settlement;
use App\Models\Zip_code;


class ApiController extends Controller
{
    public function index($zc)
    {
        //realizamos la busqueda de información
        $zip_code = Zip_code::where('zip_code', $zc)->get();
        //lo ingresamos a un for por los codigos postales que tienen más asentamientos
        $data= array("zip_code" => $zip_code[0]->zip_code,
            "locality" => $zip_code[0]->ciudad,
            "federal_entity" => array("key" => $zip_code[0]->clave_entidad,
                "name" => $zip_code[0]->entidad,
                "code" => null));
        for ($i = 0, $long = count($zip_code); $i < $long; ++$i) {
            //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays

            $data1[$i] = array("settlements" => array("key" => $zip_code[$i]->identificador_uni_asent,
                "name" => $zip_code[$i]->asentamiento,
                "zona_type" => $zip_code[$i]->zona_ubi_asent,
                "senttlement_type" => array("name" => $zip_code[$i]->tipo_asentamiento)));
        };
        $data2=array("municipality" => array("key" => $zip_code[0]->clave_municipio, "name" => $zip_code[0]->municipio));
            //mandamos como reponse el json de la información obtenida de la base de datos
        //$datas1= array_slice($data1,0);
        $datas = $data + $data1 + $data2;
        //dd(gettype($datas));//es un array
        //array_values(array_values($datas1))
        //dd($datas);
        return response()->json($datas);
    }
    //mandamos como reponse el json de la información obtenida de la base de dato
}
