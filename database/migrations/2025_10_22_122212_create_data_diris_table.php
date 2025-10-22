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
        Schema::create('data_diris', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->date('tanggal_sk');
            $table->integer('nomor_sk');
            $table->timestamp('tmt_golongan');
            $table->date('tempat_lahir');
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'hindu', 'buddha', 'konghucu']);
            $table->integer('nomor_pertek_bkn');
            $table->integer('masa_gk_bulan');
            $table->integer('masa_gk_tahun');
            $table->string('golongan_ruang');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diris');
    }
};
