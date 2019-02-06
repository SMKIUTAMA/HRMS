<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahFieldTableKarayawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      schema::table('karayawan',function(Blueprint $table) {
        $table->string('usia');
        $table->string('Agama');
        $table->string('alamat');
        $table->date('tanggal_kerja');
        $table->integer('id_jabatan');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    schema::drop('karayawan');
    }
}
