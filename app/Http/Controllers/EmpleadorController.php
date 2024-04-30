<?php

namespace App\Http\Controllers;
use App\Models\Empleado;

use Illuminate\Http\Request;

class EmpleadorController extends Controller
{
     
    public function verEmpleados(){
        
        $empleados = Empleado::all();
        return view('empleado', compact('empleados'));
    }

    public function crearEmpleados(){
        return view('crearEmpleado');
    }
    public function guardarEmpleados(Request $request){
        $nvoEmpleado  = new Empleado();
    
        $nvoEmpleado -> nombre = $request->nombre;
        $nvoEmpleado -> apellido = $request->apellido;
        $nvoEmpleado -> fechaIngreso = $request->fechaIngreso;
        $nvoEmpleado -> salario = $request->salario;
        $nvoEmpleado -> save();
        return redirect()->route('detodo.verEmpleados');
    }

    

}
