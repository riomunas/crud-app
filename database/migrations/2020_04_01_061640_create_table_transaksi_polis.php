<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksiPolis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_transaksi_polis', function (Blueprint $table) {
            $table->increments('kode_trans_polis')->unsigned();
            $table->string('no_polis', 50)->unique();
            $table->integer('kode_user');
            $table->integer('kode_siswa');
            $table->integer('kode_komu');
            $table->string('kode_produk', 10);//ketable t_master_produk
            $table->date('tgl_transaksi');
            $table->date('mulai_tgl');
            $table->date('sampai_tgl');
            $table->decimal('nilai_premi', 19, 4);
            $table->string('file_polis', 50);
            $table->date('expired_polis');
            $table->date('entry_date');
            $table->string('entry_by', 50);

            $table->foreign('kode_produk')->references('kode_produk')->on('t_master_produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_transaksi_polis');
    }
}
