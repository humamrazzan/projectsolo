<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('kamars', function (Blueprint $table) {
        $table->id();
        $table->string('nomor_kamar');
        $table->string('jenis_kamar');
        $table->integer('harga');
        $table->enum('status', ['kosong', 'terisi']);
        $table->string('fasilitas');
        $table->text('deskripsi');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
