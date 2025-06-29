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
        Schema::create('servis_infinix', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('merek_hp');
            $table->string('image')->nullable();
            $table->text('kerusakan');
            $table->date('tanggal');
            $table->integer('biaya_servis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servis_infinix');
    }
};
