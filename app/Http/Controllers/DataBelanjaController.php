<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBelanjaController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        return view('belanja', [
            'keranjangbelanja' => $keranjangbelanja
        ]);
    }

    public function tambah()
    {
        return view('tambahbelanja');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);

        return redirect('/belanja');
    }

    // method untuk hapus data belanja
    public function hapus($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();

        return redirect('/belanja');
    }
}