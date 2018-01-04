<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegionesTable extends Migration
{
    /**
     * INSERT INTO `regiones` (`id`, `nombre`, `ISO_3166_2_CL`) VALUES
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regiones', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            $table->String('ISO_3166_2_CL');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regiones');
    }
}
