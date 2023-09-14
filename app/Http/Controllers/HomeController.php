<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function dashboard() {
        return view('dashboard');
    }

    public function app() {
        return view('sketches');
    }

    public function blog() {
        return view('blog/blog');
    }
    

    public function show($id) {
        $nama = 'Prima';
        $nilai = $id;
        $hobby = DB::table('users')->get();

        return view('about', [
            'nilai' => $nilai,
            'nama' => $nama,
            'hobby' => $hobby
        ]);

    }

    public function dataDiri() {
        $nama = 'Prima Sentana';
        $kelas = 'XII RPL';

        return view('profile', [
            'name' => $nama,
            'kelas' => $kelas
        ]);
    }
}
