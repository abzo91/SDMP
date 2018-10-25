<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QOSDashboard extends Model
{
    protected $fillable = [
        'created_by_id', 'category', 'title', 'agent_id', 'comments', 'date_of_creation'
    ];
    public $timestamps = false;
    protected $table = "qos_dashboards";
}
