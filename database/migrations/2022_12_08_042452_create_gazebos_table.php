<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGazebosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gazebos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nohp');
            $table->foreignId('category_gazebos_id');
            $table->date('tanggal');
            $table->time('masuk');
            $table->time('keluar');
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
        Schema::dropIfExists('gazebos');
    }
}
