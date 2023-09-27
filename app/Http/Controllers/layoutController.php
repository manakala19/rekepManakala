<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\laporan_kegiatan;
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
        $users->level = $request->level;
        $users->save();
        return redirect('admin');
    }
    public function addLaporan(){
        return view('addLaporan');
    }
    public function pAddLaporan(Request $request){
        $request->laporan_kegiatan();
    }
    public function lihatLaporan(){
        $laporan_kegiatan_data = laporan_kegiatan::with(['user'=>function ($q){
            $q->where('id', auth()->user()->id);
        }])->get();
        return view('viewLaporan',compact(['laporan_kegiatan_data']));
    }
    public function accLaporan(Request $request){
        $request->validate([
            'status_laporan' => 'required',
        ]);
        $laporan_kegiatan = new laporan_kegiatan;
        $laporan_kegiatan->status_laporan = true;
        $laporan_kegiatan->save();
        return redirect('admin')->with('sukses','Laporan berhasil di acc');
    }
    public function beriCatatan(){
        return view('admin.catatan');
    }
    public function storeCatatan(){
        
    }
}
