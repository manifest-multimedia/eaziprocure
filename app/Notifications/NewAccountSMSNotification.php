<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Infobip\InfobipChannel;
use NotificationChannels\Infobip\InfobipMessage;
use Auth; 

class NewAccountSMSNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

     public $phone_number;

    public function __construct()
    {
        $this->phone_number='233549539417'; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [InfobipChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toInfobip($notifiable)
    {
        return (new InfobipMessage)
                    ->content('Dear '.Auth::user()->name.', Your account has been successfully created.');
                    
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

    

    // public function routeNotificationForInfobip()
    // {
    //     return '233549539417'; 
        
    // }

    // public function toArray($notifiable)
    // {
    //     return [
    //         //
    //     ];
    // }
}
