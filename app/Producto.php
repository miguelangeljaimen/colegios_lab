<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /*
       
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('valor');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->timestamps();
       
    
    */
    protected $table = 'productos';

    protected $fillable = ['titulo','descripcion','valor','usuario_id'];

    public function obtenerUsuario(){
    	return $this->belongsTo('App\Usuario');
    }
    
}
