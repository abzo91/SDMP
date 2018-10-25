<?php

namespace App\Events;

use Illuminate\Support\Facades\Auth;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\User;

class eventTrigger implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $userss;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($userss)
    {
        $this->userss = $userss;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        if(Auth::check() && Auth::user()->role_id == "1") {
            // && auth()->user()->status == "0"
            // && auth()->user()->role == "XXXX"
            //$userss = User::where('role_id','=','2')->get();
            return new PrivateChannel('App.User.' . $this->userss->id);
        }
        return true;
    }
}
