<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('kode_mk', 20)->unique();
            $table->string('nama_mk', 255);
            $table->text('deskripsi')->nullable();
            $table->unsignedTinyInteger('sks');
            $table->string('semester', 50);
            $table->foreignId('dosen_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['dosen_id']);
            $table->dropColumn([
                'kode_mk',
                'nama_mk',
                'deskripsi',
                'sks',
                'semester',
                'dosen_id',
            ]);
        });
    }
};