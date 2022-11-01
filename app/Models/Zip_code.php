<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zip_code extends Model
{
    use HasFactory;


    public function getRouteKeyName(){
        return 'zip_code';
    }

    protected $table = 'zip_codes';
    protected $keyType='varchar';
    protected $primaryKey = 'zip_code';

}
