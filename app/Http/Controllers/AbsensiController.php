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
        if(Auth::user()->role == 'admin' || Auth::user()->role == 'manajer'){
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
        $dariTanggal = $request->input('dari_tgl');
        $hinggaTanggal = $request->input('hingga_tgl');

        // Validasi input jika diperlukan

        $absensiQuery = Absensi::query();

        if (!empty($dariTanggal) && !empty($hinggaTanggal)) {
            // Jika dari_tgl dan hingga_tgl diisi, pencarian dengan rentang tanggal
            $absensiQuery->whereBetween('created_at', [$dariTanggal, $hinggaTanggal]);
        } elseif (!empty($dariTanggal)) {
            // Jika hanya dari_tgl diisi, pencarian per hari
            $absensiQuery->whereDate('created_at', $dariTanggal);
        } else {
            // Tidak ada parameter yang diisi, lakukan sesuai kebutuhan Anda
        }

        $absensi = $absensiQuery->get();
                        
        return view('absensi.dashboard', compact('absensi'));
    }
}
