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
}
