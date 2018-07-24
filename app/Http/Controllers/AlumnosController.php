<?php

namespace App\Http\Controllers;

class AlumnosController extends Controller
{
    public function home()
    {
        return 'Hola Mundo';
    }
    public function create()
    {
        return 'Agregar Alumno';
    }
    public function store()
    {
        return 'Guardar Alumno';
    }
    public function edit()
    {
        return 'Modificar Alumno';
    }
    public function update()
    {
        return 'Actualizar Alumno';
    }
    public function delete()
    {
        return 'Eliminar Alumno';
    }
    public function search()
    {
        return 'Buscar Alumno';
    }
}
