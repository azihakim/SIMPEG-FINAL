<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.dashboard', compact('karyawan'));
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
        $karyawan = new Karyawan;
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->username = $request->username;
        $karyawan->nik = $request->nik;
        $karyawan->password = $request->password;
        $karyawan->tgl_masuk = $request->tgl_masuk;
        $karyawan->telepon = $request->telepon;
        $karyawan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $karyawan->agama = $request->agama;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->status = "Aktif";

        $karyawan->save();
        return redirect('/karyawan')->with('status', 'Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function status($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->status = $request->status;
        $karyawan->save();
        return redirect('/karyawan')->with('status', 'Berhasil diubah!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->alamat = $request->alamat;
        $karyawan->username = $request->username;
        $karyawan->nik = $request->nik;
        if ($request->password != null) {
            $karyawan->password = $request->password;
        }
        $karyawan->tgl_masuk = $request->tgl_masuk;
        $karyawan->telepon = $request->telepon;
        $karyawan->pendidikan_terakhir = $request->pendidikan_terakhir;
        $karyawan->agama = $request->agama;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->status = $request->status;

        $karyawan->save();
        return redirect('/karyawan')->with('status', 'Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }
}
