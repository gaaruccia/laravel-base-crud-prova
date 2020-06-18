<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOminiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omini', function (Blueprint $table) {
            $table->id();

            $table->string('nome');
            $table->string('cognome');
            $table->integer('eta');
            $table->string('indirizzo');
            $table->string('capelli');
            $table->string('occhi');
            $table->integer('altezza');
            $table->integer('peso');
            $table->string('sesso');

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
        Schema::dropIfExists('omini');
    }
}
