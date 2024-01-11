<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('dashboard', compact('karyawan'));
    }
}