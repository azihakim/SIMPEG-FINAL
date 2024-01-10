<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $absensi = Absensi::all();
        }
        else if(Auth::user()->role == 'karyawan'){
            $userId = Auth::id();

            $absensi = Absensi::where('user_id', $userId)->with('user')->get();
        }
        return view('absensi.dashboard', compact('absensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $ext = $request->foto->getClientOriginalExtension();
        $file = "foto-".time().".".$ext;
        $request->foto->storeAs('public/dokument', $file);
        $absen = new Absensi();
        $absen->user_id = auth()->user()->id;
        $absen->lokasi = $data['lokasi'];
        $absen->jenis = $data['jenis'];
        $absen->foto = $file;
        $absen->save();

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absensi $absensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        //
    }

    public function filter(Request $request)
    {
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');

        // Validasi input jika diperlukan

        $absensi = Absensi::whereMonth('created_at', $bulan)
                        ->whereYear('created_at', $tahun)
                        ->get();
                        
        return view('absensi.dashboard', compact('absensi'));
    }
}
