<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderReceived extends Notification
{
    use Queueable;

    protected $title;
    protected $message;
    protected $serviceRequestId;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($title, $message, $serviceRequestId)
    {
        $this->title = $title;
        $this->message = $message;
        $this->serviceRequestId = $serviceRequestId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'service_requests_id' => $this->serviceRequestId,
            'created_at' => Carbon::now()
        ];
    }
}
