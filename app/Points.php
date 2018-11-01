<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    //Table Name
    protected $table = 'qos_dashboards';
    public $primaryKey = 'id';
    public $timestamps = true;

    //foreign key
    public function user()
    {
    return $this->belongsTo('App\User');
    }
}
