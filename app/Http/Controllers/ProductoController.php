<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function verProductos(){
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function crearProductos(){
        return view('crearProducto');
    }

    public function guardarProducto(Request $request){
        $nvoProducto  = new Producto();
    
        $nvoProducto -> descripcion = $request->descripcion;
        $nvoProducto -> precio = $request->precio;
        $nvoProducto -> stock = $request->stock;
        $nvoProducto -> pagaIsv = $request->pagaIsv === 'si' ? 1 : 0;
        $nvoProducto -> save();
        return redirect()->route('detodo.verProductos');
    }
}

