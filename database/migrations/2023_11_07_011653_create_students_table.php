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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table -> integer ('nis') -> unique();
            $table -> string('nama', 100);
            $table -> foreignId('kelas_id');
            $table -> string('kelas', 50);
            $table -> date('tgl_lahir');
            $table -> text('alamat');    
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
