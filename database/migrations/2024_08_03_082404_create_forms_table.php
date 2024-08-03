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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('ketersediaan_dokumen', ['Tersedia', 'Tidak Tersedia']);
            $table->text('catatan');
            $table->string('kualitatif');
            $table->integer('jumlah');
            $table->enum('keberadaan', ['Ada', 'Tidak Ada']);
            $table->enum('kesesuaian_standar', ['Sesuai', 'Tidak Sesuai']);
            $table->text('deskripsi_hasil_audit');
            $table->text('faktor_pendukung');
            $table->text('temuan_audit');
            $table->text('faktor_penghambat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
