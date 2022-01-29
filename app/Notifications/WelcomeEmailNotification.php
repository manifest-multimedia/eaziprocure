<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmailNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
                    ->subject('⚡ Welcome to EaziProcure')
                    ->greeting('Hello '.getFirstName($notifiable->name).'!')
                    ->line('Welcome to EaziProcure and thanks for singing up! You have joined thousands of organizations just like yours who manage their procurements with EaziProcure.')
                    ->action('Sign In To Your Account', url('https://eaziprocure.com'))
                    ->line('We hope you enjoy this opportunity to take EaziProcure for a spin. Feel free to kick the tires and get acquainted with no limits and no obligations on your forever free plan!')
                    ->line('PS: You can always upgrade to a paid plan anytime to enjoy more features and limitless possibilities!');   
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