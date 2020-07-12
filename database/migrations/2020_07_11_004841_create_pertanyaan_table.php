<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->longText('isi');
            $table->date('tanggal_dibuat')->nullable();
            $table->date('tanggal_diperbarui')->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); // menambahkan kolom baru
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // menambah foreign key
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
        Schema::dropIfExists('pertanyaan');
    }
}
