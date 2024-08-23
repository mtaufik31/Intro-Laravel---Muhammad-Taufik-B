<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index() {
        $casts = DB::table('cast')->get();
        return view('casts.index',  compact('casts'));

    }

    public function create() {
        return view('casts.create');
    }

    public function store(Request $request) {
        $validation = $request->validate([
            "nama" => "required",
            "umur" => "required",
            "bio" => "required",
        ]);
        $query = DB::table('cast')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"],
            "bio" => $request["bio"]
        ]);

        return redirect('/cast')->with('success', 'Data Berhasil Ditambah');
        // dd($request->all());
    }


    public function show($id) {
        $casts = DB::table('cast')->where('id', $id)->get();
        if(!$casts) {
            abort(404);
        }
        return view('casts.show', compact('casts'));
    }

    public function edit($id) {
        $casts = DB::table('cast')->where('id', $id)->get();
        if(!$casts) {
            abort(404);
        }
        return view('casts.edit', compact('casts'));
    }


    public function update(Request $request, $id) {
        $validation = $request->validate([
            "nama" => "required",
            "umur" => "required",
            "bio" => "required",
        ]); 
        $query = DB::table('cast')
            ->where('id', $id)
            ->update([
                "nama" => $request["nama"],
                "umur" => $request["umur"],
                "bio" => $request["bio"]
            ]);

        return redirect('/cast')->with('success', 'Data Berhasil Diubah');
    }


    public function destroy($id) {
        DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast')->with('success', 'Data Berhasil Dihapus');
    }
}
