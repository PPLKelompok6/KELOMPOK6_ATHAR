<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Content;

class ReminderManualNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $reminder;

    public function __construct($reminder)
    {
        $this->reminder = $reminder;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '⏰ Pengingat Kesehatan - MedFast',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.reminder',
            with: [
                'reminder' => $this->reminder,
                'patient_name' => $this->reminder->user->name,  // Nama Pasien
                'doctor_name' => $this->reminder->doctor->name,  // Nama Dokter
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
