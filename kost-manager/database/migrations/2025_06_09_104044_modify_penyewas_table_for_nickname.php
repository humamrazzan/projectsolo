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
        Schema::table('penyewas', function (Blueprint $table) {
            $table->string('nama_panggilan')->after('nama');
            $table->dropColumn(['email', 'alamat', 'tanggal_berakhir']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->dropColumn('nama_panggilan');
            $table->string('email')->unique();
            $table->string('alamat');
            $table->date('tanggal_berakhir');
        });
    }
};
