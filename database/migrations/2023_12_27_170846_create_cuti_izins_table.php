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
        Schema::create('cuti_izins', function (Blueprint $table) {
            $table->id();
            // $table->string('id_user');
            $table->string('keterangan');
            $table->string('status');
            $table->string('dari_tgl');
            $table->string('hingga_tgl');
            $table->string('alasan');
            $table->string('surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuti_izins');
    }
};
