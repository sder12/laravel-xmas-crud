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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            //Nome
            $table->string('name', 50);

            //Cognome
            $table->string('surname', 50);

            //Indirizzo
            $table->text('address');

            //Città
            $table->string('city', 100);

            //Data di arrivo
            $table->date('arrival_date');

            //Regalo
            $table->string('present', 250);

            //Testo Letterina
            $table->text('letter_text')->nullable();

            //Rating bambino 1 a 5
            $table->tinyInteger('goodness_rating')->unsigned();

            //Se il regalo è stato consegnato
            $table->tinyInteger('present_was_delivered')->default(0);

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
        Schema::dropIfExists('letters');
    }
};
