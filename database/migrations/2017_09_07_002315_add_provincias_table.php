<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvinciasTable extends Migration
{
    /**
     * INSERT INTO `provincias` (`id`, `nombre`, `id_region`) VALUES
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre');
            
            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regiones');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
