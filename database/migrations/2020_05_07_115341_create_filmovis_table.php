<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmovis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naslov');
            $table->bigInteger('id_zanr')->unsigned();
            $table->integer('godina');
            $table->string('trajanje');
            $table->string('slika');
            $table->text('opis');
            $table->timestamps();

            $table->foreign('id_zanr')->references('id')->on('zanrs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmovis');
    }
}
