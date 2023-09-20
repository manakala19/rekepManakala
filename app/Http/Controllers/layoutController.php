<?php

namespace App\Http\Controllers;

use App\Models\siswa;
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
        $users->jurusan_id = $request->jurusan;
        $users->tempat_prakerin= $request->tempat;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect()->route('admin.index');
    }
    public function addLaporan(){
        return view('addLaporan');
    }
    public function pAddLaporan(Request $request){
        $request->laporan_kegiatan();
    }
    public function search(Request $request){
        if($request->has('search')){
            $siswa = siswa::where('nama', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $siswa = siswa::all();
        }

        return view('admin.index', ['siswa' => $siswa]);
    }
}
