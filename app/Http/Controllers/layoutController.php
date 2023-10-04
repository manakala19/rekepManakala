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
    public function lihatLaporan(User $id){
        $getdata = $id->load('laporan_kegiatan');
        return view('viewLaporan',compact('getdata'));

        // $data = User::find($id);
        // return view('../viewLaporan', compact('data', 'id'));
    }
    public function accLaporan(Request $request, laporan_kegiatan $data){
        if($data->status_laporan == 0){
            $data->update(['status_laporan'=>1]);
            return redirect('admin')->with('sukses','Laporan Berhasil di acc');
        } else{
            $data->update(['status_laporan'=>0]);
            return redirect('admin')->with('sukses','acc laporan dibatalkan');

        }
    }
    public function beriCatatan(laporan_kegiatan $data){
        return view('admin.catatan', compact('data'));
    }
    public function storeBeriCatatan(Request $request, laporan_kegiatan $data){
        $data->update(['catatan_pembimbing'=>$request->catatanPembimbing]);
        return redirect('admin')->with('sukses', 'Catatan berhasil di input');
    }
}
