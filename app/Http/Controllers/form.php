<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\form as formclass;

class form extends Controller
{
    public function storeInDb(Request $request){

        $request->validate([
            'nombre' => 'required|max:15',
            'apellido' => 'required|max:15',
            'edad' => 'required|numeric|max:100',
        ]);

        $user = new formclass;
        $user->name = $_POST['nombre'];
        $user->surname = $_POST['apellido'];
        $user->age = $_POST['edad'];
        $user->save();

        return (view("form_answer"));
    }
}
