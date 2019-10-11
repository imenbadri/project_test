<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $guarded= [];

   public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);

    }

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
    public function livres()
    {
    	return $this->hasMany('App\Livre');
    	//return $this->hasMany(Livre::class);
    }
}
