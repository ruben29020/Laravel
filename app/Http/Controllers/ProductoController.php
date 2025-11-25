<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        // Traer todos los productos
        $productos = DB::table('productos')->get();

        // Enviar a la vista
        return view('productos.index', compact('productos'));
    }
}
