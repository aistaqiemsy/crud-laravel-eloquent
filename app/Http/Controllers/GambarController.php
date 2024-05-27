<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class GambarController extends Controller
{
    public function uploadGambar(Request $request) {
        if($request->hasFile('gambar')) {
            $folder = 'tempatgambar';
            $fileName = $request->file('gambar')->hashName();
            $path = Storage::disk('public')->putFileAs($folder, $request->file('gambar'), $fileName);

            DB::table('tb_gambar')->insert([
                'nama_gambar' => $fileName
            ]);

            return "Gambar <b>$fileName</b> berhasil di unggah ke MySQL dan di salin ke $path<hr>";
        }
    }
}
