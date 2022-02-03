<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserInvitationNotification extends Notification
{
    use Queueable;

    public $name; 
    public $email;
    public $url; 
    public $organization;
    public $invitedby;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($name, $email, $url, $organization, $invitedby)
    {
         $this->name=$name; 
         $this->email=$email; 
         $this->url=$url; 
         $this->organization=$organization;
         $this->invitedby=$invitedby;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Invitation to Join your Organization')
                    ->greeting('Dear ' .$this->name.',')
                    ->line($this->invitedby.' is inviting you to setup your account on eaziprocure for your organization - '.$this->organization)
                    ->action('Accept Invitation', url($this->url))
                    ->line('Thank you for using our application!');
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
