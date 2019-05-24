<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Schemta;

class InspectorController extends Controller
{
    //


    public  function  boot (){
        Shema::defaultStringLength(191);
    }
}
