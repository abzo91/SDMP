<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallObservation extends Model
{
    protected $fillable = [
        'title', 'observer_id', 'observed_agent_id', 'silenceradio', 'plazzaradio', 'techskills', 
        'shiftradio', 'ticketradio', 'greetings1', 'greetings2', 'greetings3', 
        'toneradio', 'attituderadio', 'holdradio', 'thankedradio','comments', 'date_observed'
    ];
    public $timestamps = false;
}
