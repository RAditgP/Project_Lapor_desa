<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik', 20);
            $table->string('no_telepon');
            $table->text('alamat');
            $table->unsignedBigInteger('jenis_surat_id');
            $table->text('alasan')->nullable();
            $table->string('file_pendukung')->nullable();
            $table->timestamps();

            // Relasi ke tabel jenis_surats
            $table->foreign('jenis_surat_id')
                ->references('id')
                ->on('jenis_surats')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_surats');
    }
};
