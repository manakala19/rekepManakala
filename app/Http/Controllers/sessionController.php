<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class sessionController extends Controller
{
    function register(){
        return redirect('/')->with('register','Untuk melakukan registrasi mohon hubungi Pihak Instansi atau Pihak Sekolah!');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('laporan-kegiatan');
        }else{
            return redirect('/');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            if (auth()->user()->level == "admin") {
                return redirect('admin');
            }else{
                return redirect('laporan-kegiatan');
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
