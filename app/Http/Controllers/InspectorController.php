<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use  Illuminate\Support\Facades\Schemta;
use App\Models\Inspectores;

class InspectorController extends Controller
{
    //


    public  function  boot (){
        Shema::defaultStringLength(191);
    }
    public  function index(){
        return Inspectores::all();
    }

    public  function store(Request $request){
        return Inspectores::create($request->all());

    }
    public  function update (Request $request,$id){
        $inspe= Inspectores::findOrFail($id);
        $inspe->update($request->all());
        return  $inspe;

    }

    public  function delete (Request $request,$id){
        $inspe= Inspectores::findOrFail($id);
        $inspe->delete($request->all());
        return  204;

    }
}
