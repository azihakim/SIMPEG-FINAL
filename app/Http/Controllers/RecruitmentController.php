<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('recruitment.dashboard');
        return view('pengajuankerja.dashboard');
    }

    public function regist(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->telepon = $request->telepon;
        $data->role = 'pelamar';
        $data->save();

        return redirect('/');
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
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->telepon = $request->telepon;
        $data->role = 'pelamar';
        $data->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recruitment $recruitment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recruitment $recruitment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recruitment $recruitment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recruitment $recruitment)
    {
        //
    }
}
