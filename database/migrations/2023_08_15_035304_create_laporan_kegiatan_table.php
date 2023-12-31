<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporan_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->string('bulan');
            $table->tinyInteger('minggu_ke');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->longText('uraian_kegiatan');
            $table->longText('catatan_pembimbing')->nullable();
            $table->string('lampiran_kegiatan');
            $table->boolean('status_laporan')->default(false);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('laporan_kegiatan');
    }
};
