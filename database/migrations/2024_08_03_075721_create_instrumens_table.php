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
        Schema::create('instrumens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('standar_id')->constrained('standars')->onDelete('cascade');
            $table->string('tipe');
            $table->string('periode');
            $table->foreignId('ketua_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('instrumen_area', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instrumen_id')->constrained('instrumens')->onDelete('cascade');
            $table->foreignId('area_id')->constrained('areas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('instrumen_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instrumen_id')->constrained('instrumens')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('instrumen_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instrumen_id')->constrained('instrumens')->onDelete('cascade');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->timestamps();
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrumen_role');
        Schema::dropIfExists('instrumen_user');
        Schema::dropIfExists('instrumen_area');
        Schema::dropIfExists('instrumens');
    }
};
