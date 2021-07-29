<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateFeedback extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $phone;
    protected $email;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request->name;
        $this->phone = $request->phone;
        $this->email = $request->email;
        $this->message = $request->message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@inspecprom.com', env('APP_NAME'))
            ->subject('Create Feedback')
            ->markdown('emails.user.create_feedback')
            ->with([
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
                'message' => $this->message
            ]);
    }
}
