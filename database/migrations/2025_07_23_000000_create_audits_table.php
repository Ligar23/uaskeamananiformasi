<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('jenis_data');
            $table->string('kerentanan');
            $table->text('hasil_audit');
            $table->enum('status', ['open', 'in_progress', 'closed'])->default('open');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audits');
    }
};