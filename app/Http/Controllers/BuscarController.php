<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zip_code_json;

class BuscarController extends Controller
{
    public function index () {
        return view('principal');}

    public function store (Request $request) {

        //dd($request->get('cp'));

        $this->validate($request,[
            'cp'=>'required'
        ]);
        //dd($request->get('cp'));
        $cp= $request->get('cp');
        //dd($cp);
        //dd($request->get($cp));
        $zip_code=json_decode(Zip_code_json::where('zip_code',$cp)->get());
       // $zip_code_json=json_decode($zip_code,true);
        //dd($zip_code_json);
       return $zip_code;
    }

}
