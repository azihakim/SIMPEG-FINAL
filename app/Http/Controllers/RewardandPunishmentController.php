<?php

namespace App\Http\Controllers;

use App\Models\RewardandPunishment;
use Illuminate\Http\Request;

class RewardandPunishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = RewardandPunishment::all();
        return view('RewardandPunishment.dashboard', compact('data'));
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
        $data = new RewardandPunishment();
        $data->tahun = $request->tahun;
        $data->bulan = $request->bulan;
        $data->potongan_gaji = $request->potongan_gaji;
        $data->bonus = $request->bonus;
        $data->keterangan = $request->keterangan;
        $data->save();

        return view('RewardandPunishment.dashboard')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(RewardandPunishment $rewardandPunishment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, RewardandPunishment $rewardandPunishment)
    {
        $data = RewardandPunishment::find($id);
        return view('RewardandPunishment.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $data = RewardandPunishment::find($id);
        $data->tahun = $request->tahun;
        $data->bulan = $request->bulan;
        $data->potongan_gaji = $request->potongan_gaji;
        $data->bonus = $request->bonus;
        $data->keterangan = $request->keterangan;
        $data->save();

        return redirect("reward-punishment")->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RewardandPunishment $rewardandPunishment)
    {
        //
    }
}
