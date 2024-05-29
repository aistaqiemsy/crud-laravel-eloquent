<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index() {
        $biodata = Biodata::all();

        return view('biodata', ['biodata' => $biodata]);
    }

    public function tambah() {
        return view('tambahBiodata');
    }

    public function simpanBiodata(Request $request) {
        Biodata::create([
            'nama' => $request->txNama,
            'alamat' => $request->txAlamat
        ]);

        return redirect('/biodata');
    }

    public function tampilEdit($id) {
        $biodata = Biodata::find($id);

        return view('tampilEdit', ['biodata' => $biodata]);
    }

    public function perbaruiData($id, Request $request) {
        $biodata = Biodata::find($id);
        $biodata->nama = $request->txUpNama;
        $biodata->alamat = $request->txUpAlamat;
        $biodata->save();

        return redirect('biodata');
    }
}
