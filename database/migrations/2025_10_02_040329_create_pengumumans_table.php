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
    Schema::create('pengumumans', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('isi');
        $table->date('tanggal');
        $table->string('gambar')->nullable(); // langsung ada gambar
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pengumumans');
}


};
