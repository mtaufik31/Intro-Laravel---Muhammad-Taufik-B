<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
    
        $request->validate([
            'nama_depan' => 'required|string|max:2',
            'nama_belakang' => 'required|string|max:2',
            'gender' => 'required',
            'nationality' => 'required',
            'language' => 'array',
            'bio' => 'nullable|string',
        ]);

        $data = [
            'nama_depan' => $request->input('nama_depan'),
            'nama_belakang' => $request->input('nama_belakang'),
            'gender' => $request->input('gender'),
            'nationality' => $request->input('nationality'),
            'language' => implode(', ', $request->input('language', [])), 
            'bio' => $request->input('bio'),
        ];

        return view('welcome', $data);
    }

    public function showWelcome()
    {
        if (!session()->has('nama_depan') || !session()->has('nama_belakang')) {
            abort(404);
        }

        return view('welcome', [
            'nama_depan' => session('nama_depan'),
            'nama_belakang' => session('nama_belakang'),
            'gender' => session('gender'),
            'nationality' => session('nationality'),
            'language' => session('language'),
            'bio' => session('bio'),
        ]);
    }
}
