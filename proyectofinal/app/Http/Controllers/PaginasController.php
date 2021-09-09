<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PaginasController extends Controller
{
   public function home(){

    return view('home');
   }
   public function editar(){
       //Paginascion para las tablas

        $items = App\Item::paginate(3);
       return view ('editar',compact('items'));
   }
   public function objeto(){
       $items =App\Item::paginate(2);
    return view ('objeto', compact('items'));
}
public function crear(Request $request){
    //Validaciones para los siguientes inputs de "home"

    $request->validate([
        'nombre'=>'required',
        'descripcion'=>'required',
        'precio'=> 'required',
        'urlfoto'=> 'required'
    ]);



    //return $request->all();

    //Request trae la informacion de inputs para agregar a BD
    $itemsNuevo = new App\Item;
    $itemsNuevo->nombre = $request->nombre;
    $itemsNuevo->descripcion = $request->descripcion;
    $itemsNuevo->precio = $request->precio;
    $itemsNuevo->urlfoto = $request->urlfoto;

    $itemsNuevo->save();

    return back()->with('mensaje','Objeto guardado!');
}
public function actualizar($id){
    $items = App\Item::findOrFail($id);
    return view('actualizar',compact('items'));

}

public function refresh(Request $request, $id){
    //validaciones para los gioentes inputos de "Actualizar"
    $request->validate([
        'nombre'=>'required',
        'descripcion'=>'required',
        'precio'=> 'required',
        'urlfoto'=> 'required'
    ]);

    //Request trae la informacion de inputs para agregar a BD
    $itemsRefresh =  App\Item::findOrFail($id);
    $itemsRefresh->nombre =$request->nombre;
    $itemsRefresh->descripcion =$request->descripcion;
    $itemsRefresh->precio =$request->precio;
    $itemsRefresh->urlfoto =$request->urlfoto;

    $itemsRefresh->save();

    return back()->with('mensaje','Objeto Actualizado');

}
public function eliminar($id){

    //Busca por id el objeto para asi eliminarlo del todo
    $itemsElminar = App\Item::findOrFail($id);
    $itemsElminar->delete();

    return back()->with('mensaje','Objeto eliminado!');
}

}

