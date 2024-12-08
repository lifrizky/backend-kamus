<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use App\Models\User;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    function dashboard() {
        $jumlahData = Kamus::count();
        $jumlahUser = User::count();
        return view('kamus.dashboard', compact('jumlahData', 'jumlahUser'));
    }
    
    function tampil() {
        $kamus = Kamus::get();
        return view('kamus.tampil', compact('kamus'));
    }

    function tambah() {
        return view('kamus.tambah');
    }

    function profil() {
        return view('kamus.profil');
    }

    function submit(Request $request) {
        $kamus = new Kamus();
        $kamus->istilah = $request->istilah;
        $kamus->penjelasan = $request->penjelasan;
        $kamus->save();

        return redirect()->route('kamus.tampil');
    }

    function edit($id) {
        $kamus = Kamus::find($id);
        return view('kamus.edit', compact('kamus'));
    }

    function update(Request $request, $id) {
        $kamus = Kamus::find($id);
        $kamus->istilah = $request->istilah;
        $kamus->penjelasan = $request->penjelasan;
        $kamus->update();

        return redirect()->route('kamus.tampil');
    }

    function delete($id) {
        $kamus = Kamus::find($id);
        $kamus->delete();
        return redirect()->route('kamus.tampil');
    }
}
