<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function adminDash(){
        return view('admin.index');
    }
    public function siswaRegister(){
        return view('admin.siswaRegister');
    }
    public function storeSiswaRegister(Request $request){
        $users = new User;
        $users->name = $request->namaLengkap;
    }
    public function addLaporan(){
        return view('addLaporan');
    }
    public function pAddLaporan(Request $request){
        $request->laporan_kegiatan();
    }
}
