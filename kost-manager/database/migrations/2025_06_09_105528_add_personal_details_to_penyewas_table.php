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
            $table->date('tanggal_lahir')->nullable()->after('nama_panggilan');
            $table->enum('status_perkawinan', ['kawin', 'belum kawin'])->nullable()->after('tanggal_lahir');
            $table->string('pekerjaan')->nullable()->after('status_perkawinan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penyewas', function (Blueprint $table) {
            $table->dropColumn(['tanggal_lahir', 'status_perkawinan', 'pekerjaan']);
        });
    }
};
