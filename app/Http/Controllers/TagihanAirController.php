<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class TagihanAirController extends Controller
{
    public function index()
    {
        $tagihan = DB::table('tagihan_air')->get();
        return view('tagihan_air.index', compact('tagihan'));
    }

    public function create()
    {
        return view('tagihan_air.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nometeran' => 'required|string|max:6|unique:tagihan_air,nometeran',
            'meterawal' => 'required|integer|min:0',
            'meterakhir' => 'required|integer|min:0',
        ]);

        DB::table('tagihan_air')->insert([
            'nometeran' => $request->nometeran,
            'meterawal' => $request->meterawal,
            'meterakhir' => $request->meterakhir,
        ]);

        return redirect()->route('tagihan_air.index')->with('success', 'Data tagihan air berhasil ditambahkan.');
    }

    
}
