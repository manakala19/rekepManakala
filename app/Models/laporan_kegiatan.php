<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class laporan_kegiatan extends Model
{
    use HasFactory;
    protected $table = 'laporan_kegiatan';
    protected $guarded = [];
    protected $fillable = ['catatan_pembimbing', 'status_laporan', 'bulan', 'minggu_ke', 'tanggal_mulai', 'tanggal_selesai', 'uraian_kegiatan', 'lampiran_kegiatan'];

    public function siswa(){
        return $this->belongsTo(User::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}

