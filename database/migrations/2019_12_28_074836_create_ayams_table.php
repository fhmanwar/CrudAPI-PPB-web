<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayams', function (Blueprint $table) {
            $table->increments('id');
            $table->char('kd_brg',30);
            $table->string('satuan',10);
            $table->double('harga_jual');
            $table->double('harga_beli');
            $table->integer('stok_min');
            $table->string('desc');
            $table->string('image');
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
        Schema::dropIfExists('ayams');
    }
}
