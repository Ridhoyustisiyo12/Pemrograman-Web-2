<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormtugasController extends Controller
{
    public function index(){
        return view('formtugas');
    }
    public function hasil(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "email" => 'required',
            "lokasi" => 'required',
            "jenis_kelamin" => 'required',
            "skill" => 'required',
        ]);
        return view('hasiltugas', ['data' => $request]);
    }
}

