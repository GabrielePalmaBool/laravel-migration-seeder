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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda',60);
            $table->string('stazione_partenza',100) ->unique();
            $table->string('stazione_arrivo',100) ->unique();
            $table->dateTime('orario_partenza') ->unique();
            $table->dateTime('orario_arrivo') ->unique();
            $table->string('codice_treno',10);
            $table->tinyInteger('num_carrozze') ->nullable(false);
            $table->boolean('in_orario') ->default(true);
            $table->boolean('cancellato') ->default(false);

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
        Schema::dropIfExists('trains');
    }
};
