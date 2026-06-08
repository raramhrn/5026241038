<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();

        return view('latihaneas', [
            'nilaikuliah' => $nilaikuliah
        ]);
    }

    public function tambah()
    {
        return view('tambahnilai');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'nrp' => $request->nrp,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);

        return redirect('/nilai');
    }
}