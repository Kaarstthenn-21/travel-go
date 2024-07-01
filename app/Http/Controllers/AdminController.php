<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Lógica para mostrar el panel de administración
        return view('admin.panel');
    }
}
