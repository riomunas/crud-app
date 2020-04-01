<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksiKlaim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_transaksi_klaim', function (Blueprint $table) {
            $table->increments('kode_transaksi_klaim');
            $table->integer('kode_user');
            $table->integer('kode_trans_polis')->unsigned();
            $table->string('no_polis', 50);
            $table->date('tgl_transaksi');
            $table->string('tipe_klaim', 20);
            $table->string('jenis_klaim', 20);
            $table->decimal('nilai_klaim', 19, 4);
            $table->text('notes');
            $table->date('tgl_kejadian');
            $table->string('no_rek_debitur', 50);
            $table->string('nama_bank', 30);
            $table->string('klasifikasi_klaim', 20);
            $table->char('status_klaim', 1);
            $table->date('entry_date');
            $table->string('entry_by', 50);

            $table->foreign('kode_trans_polis')->references('kode_trans_polis')->on('t_transaksi_polis');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_transaksi_klaim');
    }
}
