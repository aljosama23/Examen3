<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function verProveedores(){
        $proveedores = Proveedor::all();
        return view('proveedor', compact('proveedores'));
    }

    public function crearProveedores(){
        return view('crearProveedor');
    }

    public function guardarProveedor(Request $request){
        $nvoProveedor  = new Proveedor();
    
        $nvoProveedor -> nombre = $request->nombre;
        $nvoProveedor -> fechaRegistro = $request->fechaRegistro;
        $nvoProveedor -> telefono = $request->telefono;
        $nvoProveedor -> correo = $request->correo;
        $nvoProveedor -> save();
        return redirect()->route('detodo.verProveedores');
    }
}
