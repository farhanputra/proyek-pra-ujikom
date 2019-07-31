<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nomor_resep');
            $table->unsignedInteger('tanggal_resep');
            $table->unsignedInteger('kode_dkt');
            $table->unsignedInteger('kode_psn');
            $table->unsignedInteger('total_harga');
            $table->unsignedInteger('bayar');
            $table->unsignedInteger('kembali');
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
        Schema::dropIfExists('reseps');
    }
}
