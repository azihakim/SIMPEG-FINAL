<?php

namespace App\Http\Controllers;

use App\Models\cutiIzin;
use Illuminate\Http\Request;

class CutiIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = cutiIzin::all();
        return view('cutiizin.dashboard', compact('data'));
    }

    public function status($id, Request $request)
    {
        $cuti = cutiIzin::find($id);
        $cuti->status = $request->status;
        $cuti->save();
        return redirect('/cutiizin')->with('status', 'Berhasil diubah!');
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
        $ext = $request->surat->getClientOriginalExtension();
        $file = "surat-".time().".".$ext;
        $request->surat->storeAs('public/dokument', $file);

        $data = new cutiIzin();
        $data->keterangan = $request->keterangan;
        $data->alasan = $request->alasan;
        $data->status = 'Pending';
        $data->dari_tgl = $request->dari_tgl;
        $data->hingga_tgl = $request->hingga_tgl;
        $data->alasan = $data->alasan;
        $data->surat = $file;
        $data->save();

        return redirect('/cutiizin')->with('status', 'Berhasil disimpan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(cutiIzin $cutiIzin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cutiIzin $cutiIzin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cutiIzin $cutiIzin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cutiIzin $cutiIzin)
    {
        //
    }
}