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
        Schema::create('p_t_k_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('butir_id')->constrained('butirs')->onDelete('cascade');
            $table->string('rekomendasi');
            $table->text('rencana');
            $table->string('jadwal_penyelesaian');
            $table->text('mekanisme_monitoring');
            $table->text('pihak_bertangung_jawab');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_t_k_s');
    }
};
