<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zip_code extends Model
{
    use HasFactory;

    /**
     * Display the specified resource.
     *
     * @param  stdClass  $zip_code
     */

    protected $primaryKey= 'zip_code';

    public function getRouteKeyName(){
    return 'zip_code';
    }

    protected $table = 'zip_codes';

}
