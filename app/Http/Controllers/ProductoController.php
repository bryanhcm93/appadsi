<?php

namespace App\Http\Controllers;
use App\Models\producto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductoController extends Controller
{

    public function index(){

        $categoria=Producto::all();
        return Inertia::render('Producto',['producto'=>$producto]);
    
    
          }

          public function update(Request $request ){
            $categoria=Producto::findOrFail($request->id);
            $categoria->nombre= $request->nombre;
            $categoria->edo= $request->edo;
            $categoria->save();
            
            }
            
            public function destroy(Request $request){
                $categoria=Producto::findOrFail($request->id);
                $categoria->delete();
            
            }
    
    //
}
