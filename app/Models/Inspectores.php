<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspectores extends Model
{
    protected $table='inspectores';
    protected $primarykey='id';
    protected $fillable=['id','nombres','cedula','telefono','estado'];
}
