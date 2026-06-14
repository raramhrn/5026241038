<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardController extends Controller
{
    public function index()
    {
        $keyboard = DB::table('keyboard')->get();

        return view('keyboard', [
            'keyboard' => $keyboard
        ]);
    }

    public function tambah()
    {
        return view('tambahkeyboard');
    }

    public function store(Request $request)
    {
        DB::table('keyboard')->insert([
            'merkkeyboard' => $request->merkkeyboard,
            'stockkeyboard' => $request->stockkeyboard,
        ]);

        return redirect('/keyboard');
    }

    public function hapus($id)
    {
        DB::table('keyboard')->where('kodekeyboard', $id)->delete();

        return redirect('/keyboard');
    }
}