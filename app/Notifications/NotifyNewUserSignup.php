<?php

namespace App\Notifications;

use App\Models\EventSignup;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;

class NotifyNewUserSignup extends Notification
{
    use Queueable;

    public $eventSignup;

    /**
     * Create a new notification instance.
     *
     * @param EventSignup $eventSignup
     * @param $slackChannel
     */
    public function __construct(EventSignup $eventSignup)
    {
        $this->eventSignup = $eventSignup;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'slack'];
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
            ->from('notify@email.laravelphp.uk', 'Laravel UK')
            ->subject('Thanks for Signing up!')
            ->view(
            'email.event_signup'
        );

    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage)
            ->success()
            ->content('New Signup for Laravel UK Event!')
            ->from('laraveluk-event', ':dart:')
            ->to("#laraveluk-live-event")
            ->attachment(function ($attachment) {
                $attachment->title('Someone has signed up!')
                    ->fields([
                        'Email' => $this->eventSignup->email,
                        'Date' => Carbon::now()->toDateTimeString(),
                    ]);
            });
    }
}
