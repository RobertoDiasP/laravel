<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function cursoindex()
    {
        return view("adm.cursos");
    }
}
