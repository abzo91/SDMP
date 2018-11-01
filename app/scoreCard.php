<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class scoreCard extends Model
{
    protected $table = 'scorecard';
    public $primaryKey = 'id';
    public $user_id = 'user_id';
    public $timestamps = true;


    //foreign key
    public function user(){
        return $this->belongsTo('App\User');
    }
}
