<?php

namespace App\Http\Controllers;
use App\Models\Marca;

use Illuminate\Http\Request;
use Inertia\Inertia;


class MarcaController extends Controller
{
    //
public function index(){

    $marca=Marca::all();
    return Inertia::render('Marcas',['marca'=>$marca]);


    // $categoria=categoria::all();
    // return ['cat'=>$categoria];
}
public function store(Request $request){

    $categoria= new Marca();
    $categoria->nombre= $request->nombre;
    $categoria->edo= $request->edo;

    $categoria->save();



}

public function update(Request $request ){
$categoria=Marca::findOrFail($request->id);
$categoria->nombre= $request->nombre;
$categoria->edo= $request->edo;
$categoria->save();

}

public function destroy(Request $request){
    $categoria=Marca::findOrFail($request->id);
    $categoria->delete();

}
}