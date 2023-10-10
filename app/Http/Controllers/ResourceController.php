<?php

namespace App\Http\Controllers;

use App\Models\laporan_kegiatan;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    public $data_bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    public function index(){
        $laporan_kegiatan_data = laporan_kegiatan::whereHas('user',function ($q){
            $q->where('id', auth()->user()->id);
        })->with('user')->get();
        return view('laporan_kegiatan.index',compact(['laporan_kegiatan_data']));
    }

    public function create(){
        $data_bulan = $this->data_bulan;
        return view('laporan_kegiatan.create', compact('data_bulan'));
    }

    public function store(Request $request){
        // $request->validate([
        //     'bulan' => 'required',
        //     'minggu_ke' => 'required',
        //     'tanggal_mulai' => 'required',
        //     'tanggal_selesai' => 'required',
        //     'uraian_kegiatan' => 'required',
        //     'lampiran_kegiatan' => 'required',
        // ]);
            $laporan_kegiatan = new laporan_kegiatan;
            $laporan_kegiatan->user_id = auth()->user()->id;
            $laporan_kegiatan->bulan = $request->bulan;
            $laporan_kegiatan->minggu_ke = $request->minggu_ke;
            $laporan_kegiatan->tanggal_mulai = $request->tanggal_mulai;
            $laporan_kegiatan->tanggal_selesai = $request->tanggal_selesai;
            $laporan_kegiatan->uraian_kegiatan = $request->uraian_kegiatan;
            $laporan_kegiatan->lampiran_kegiatan = $request->file('lampiran_kegiatan')->store('tes_lampiran');
            $laporan_kegiatan->save();
            return redirect()->route('laporan-kegiatan.index')->with('sukses','Laporan kegiatan berhasil ditambahkan');
    }
    public function show(laporan_kegiatan $laporan_kegiatan)
    {
        return view('laporan_kegiatan.show',compact('laporan_kegiatan'));
    }
    public function edit(laporan_kegiatan $laporan_kegiatan)
    {
        $this->authorize('update', [laporan_kegiatan::class, $laporan_kegiatan]);
        $data_bulan = $this->data_bulan;
        return view('laporan_kegiatan.edit',compact('laporan_kegiatan', 'data_bulan'));
    }

    public function update(Request $request, laporan_kegiatan $laporan_kegiatan)
    {
        $request->validate([
            'tanggal' => 'required',
            'hari' => 'required',
            'minggu_ke' => 'required',
            'kegiatan_kerja_harian' => 'required',
        ]);

        $laporan_kegiatan->update($request->all());

        return redirect('laporan-kegiatan')->with('success','laporan_kegiatan updated successfully');
    }
    public function downloadImage(laporan_kegiatan $id){
        return Storage::download($id->lampiran_kegiatan);
    }
    public function destroy(laporan_kegiatan $laporan_kegiatan){
        $laporan_kegiatan->delete();
        return redirect('laporan-kegiatan')->with('success', 'Laporan Kegiatan Berhasil Di Delete');
    }
}
