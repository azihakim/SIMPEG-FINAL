<?php

namespace App\Http\Controllers;

use App\Models\Penugasan;
use Illuminate\Http\Request;

class PenugasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penugasan::all();
        return view('penugasan.dashboard', compact('data'));
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
        $data = new Penugasan();
        $data->tempat_penugasan = $request->tempat_penugasan;
        $data->dari_tgl = $request->dari_tgl;
        $data->hingga_tgl = $request->hingga_tgl;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/penugasan')->with('status', 'Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penugasan $penugasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $data = Penugasan::find($id);
        return view('penugasan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Penugasan::find($id);
        $data->tempat_penugasan = $request->tempat_penugasan;
        $data->dari_tgl = $request->dari_tgl;
        $data->hingga_tgl = $request->hingga_tgl;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect('/penugasan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penugasan $penugasan)
    {
        //
    }
}
