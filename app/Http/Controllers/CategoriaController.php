<?php

namespace App\Http\Controllers;
use App\Models\categoria;

use Illuminate\Http\Request;
use Inertia\Inertia;


class CategoriaController extends Controller
{
    //
public function index(){

    $categoria=Categoria::all();
    return Inertia::render('Categoria',['cat'=>$categoria]);


    // $categoria=categoria::all();
    // return ['cat'=>$categoria];
}



    public function store(Request $request){

        $categoria= new categoria();
        $categoria->nombre= $request->nombre;
        $categoria->edo= $request->edo;

        $categoria->save();



    }

    public function update(Request $request ){
$categoria=Categoria::findOrFail($request->id);
$categoria->nombre= $request->nombre;
$categoria->edo= $request->edo;
$categoria->save();

    }

    public function destroy(Request $request){
        $categoria=Categoria::findOrFail($request->id);
        $categoria->delete();

    }
}
