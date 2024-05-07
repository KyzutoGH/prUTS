<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTSController extends Controller
{
    //
    function index(){
        return view('index');
    }
    function create(){
        return view('create');
    }
    public function simpan(Request $request)
    {
    
        $request->session()->put('kunci', 'Data mahasiswa berhasil ditambahkan');

        return redirect()->route('index');
    }

}
