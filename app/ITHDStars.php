<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ITHDStars extends Model
{
    protected $fillable = [
        'agent_id', 'last_updated', 'starnumber'
    ];
    public $timestamps = false;
    protected $table = 'ithdstars';
}
