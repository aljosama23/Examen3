<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $table = 'proveedores';
    public $timestamps = false; 
    public $primaryKey = 'idProveedor';
}
