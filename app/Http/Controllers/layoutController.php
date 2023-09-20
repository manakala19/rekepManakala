<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\User;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(){
        return view('index');
    }
    public function adminDash(Request $request){
        $user = User::all();
        if($request->has('search')){
            $user = User::where('name', 'LIKE', '%'.$request->search.'%')->get();
        }else{
            $user = User::all();
        }

        return view('admin.index', ['siswa' => $user], compact('user'));
    }
    public function siswaRegister(){
        $jurusan = jurusan::all();
        return view('admin/siswaRegister', compact('jurusan'));
    }
    public function storeSiswaRegister(Request $request){
        $users = new User;
        $users->name = $request->namaLengkap;
        $users->jurusan_id = $request->input('jurusan');
        $users->tempat_prakerin= $request->tempat;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        return redirect('admin');
    }
    public function addLaporan(){
        return view('addLaporan');
    }
    public function pAddLaporan(Request $request){
        $request->laporan_kegiatan();
    }
}
