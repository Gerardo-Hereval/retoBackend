<?php

namespace App\Http\Controllers;

//modelos a ocupar
use App\Models\Zip_code;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use stdClass;



class ApiController extends Controller
{

    public function index($zc)
    {
        /**
         * Display the specified resource.
         *
         * @param  stdClass  $zip
         * @param string $zc
         * @return Response
         */
        //realizamos la busqueda de información
        $zip = DB::table('prueba')->where('id_zp',$zc)->get();
        if(isset($zip)){
        //obtenemos la informacion de la base de datos y empezamos a organizar el json mediante arrays
        $data= array("zip_code" => $zip[0]->id_zp,
            "locality" => $zip[0]->ciudad,
            "federal_entity" => array("key" => $zip[0]->clave_entidad,
                "name" => $zip[0]->entidad,
                "code" => null));
        //lo ingresamos a un for por los codigos postales que tienen más asentamientos
        for ($i = 0, $long = count($zip); $i < $long; ++$i) {
            $data1[$i] = array("key" => $zip[$i]->identificador_uni_asent,
                "name" => $zip[$i]->asentamiento,
                "zona_type" => $zip[$i]->zona_ubi_asent,
                "senttlement_type" => array("name" => $zip[$i]->tipo_asentamiento));
        };
        //continuamos obteniendo la data en otro array
        $data2=array("municipality" => array("key" => $zip[0]->clave_municipio, "name" => $zip[0]->municipio));
        }
        $zip_code=null;
        //creamos una variable con las arrays para imprimirlo
        $datas = $data + array("settlements"=>$data1) + $data2;
        return response()->json($datas);
    }
    //mandamos como reponse el json de la información obtenida de la base de dato
}
