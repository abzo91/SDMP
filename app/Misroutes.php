<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Misroutes extends Model
{
    //Table Name
    protected $table = 'misroutes';
    public $primaryKey = 'id';
    public $timestamps = true;

    //foreign key
    public function user()
    {
    return $this->belongsTo('App\User');
    }
}
