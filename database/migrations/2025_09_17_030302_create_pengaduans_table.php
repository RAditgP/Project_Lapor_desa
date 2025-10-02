<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('pengaduans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nik');
        $table->string('telepon');
        $table->string('judul');
        $table->text('isi');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
};
