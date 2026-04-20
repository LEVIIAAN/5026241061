<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController.";
    }

    public function biodata(){
        $nama = "Levian";
        return view('biodata', ['nama' => $nama]);
    }
}
