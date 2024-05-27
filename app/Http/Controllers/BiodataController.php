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
}
