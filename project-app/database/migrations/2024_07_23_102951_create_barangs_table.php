<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->decimal('harga_per_unit', 15, 2);
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar')->nullable();
            $table->string('nomor_tracking')->unique();
            $table->enum('status', ['masuk', 'keluar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
