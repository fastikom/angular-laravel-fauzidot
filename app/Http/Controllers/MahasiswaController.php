<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class MahasiswaController extends Controller
{
     public function index()
    {
        $Mahasiswa = Mahasiswa::all();

        return response()->json($Mahasiswa);
    }
}
