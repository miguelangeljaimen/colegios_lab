<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    /*
     public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('comuna_id')->unsigned();
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->string('direccion');
            $table->timestamps();
        });
    }
    */
    
    protected $table = 'colegios';

    protected $fillable = ['nombre','telefono','correo','comuna_id','direccion'];

    public function obtenerComuna(){
    	return $this->belongsTo('App\Comuna');
    }
}
