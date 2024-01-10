<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function index()
    {
        return view('pengajuankerja.dashboard');
    }
    public function store(Request $request)
    {

        $ext = $request->berkas->getClientOriginalExtension();
        $file = "berkas-".auth()->user()->name.time().".".$ext;
        $request->berkas->storeAs('public/dokument', $file);

        $data = new Recruitment();
        $data->user_id = auth()->user()->id;
        $data->status = 'Pending';
        $data->berkas = $file;
        $data->save();

        return redirect('/');
    }
}
