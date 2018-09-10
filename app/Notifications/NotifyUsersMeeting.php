<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NotifyUsersMeeting extends Notification
{
    use Queueable;

    //public $idu;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()//$idu
    {
        //$this->idu = $idu;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['Database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        return [
            //'role_id' => $this->idu['role_id'],
            'meeting' => 'meeting now',
        ];
    }

    public function toBroadcast($notifiable)
    {
        return [
            'data' => [
                'meeting' => 'meeting now'
            ]
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
