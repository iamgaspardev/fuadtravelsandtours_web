<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Consultation;

class ConsultationRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $consultation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Consultation $consultation)
    {
        $this->consultation = $consultation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.consultation_request')
                    ->with('consultation', $this->consultation);
    }
}
