<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
   
	//protected $fillable= ['titre','description'];
	protected $guarded= [];
	public function getTitreAttribute($value)
    {
        return strtoupper($value);
    }

    public function getAuteurAttribute($value)
    {
        return strtoupper($value);
    }

    public function setNbr_pagesAttribute($value)
    {
        return strtoupper($value);
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
