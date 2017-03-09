<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{

    /*
     * These attributes are mass assignable.
     */
    protected $fillable = ['brand', 'model', 'frame_id', 'wheel_id']; 

    public function frame()
    {
        return $this->belongsTo('App\Frame');
    }

    public function wheel()
    {
        return $this->belongsTo('App\Wheel');
    }
}
