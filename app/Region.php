<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
        protected $table = 'regiones';

    protected $fillable = ['nombre'];

     	public function provincias(){
    		return $this->hasMany('App\Provincia');
    	}
}
