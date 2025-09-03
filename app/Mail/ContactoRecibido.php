<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ContactoRecibido extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo mensaje desde el formulario de contacto',
            from: new \Illuminate\Mail\Mailables\Address('hello@example.com', config('app.name')),
        );
    }

    public function content(): Content
    {
    return new Content(
        markdown: 'emails.contacto',
        with: [
            'datos' => $this->datos,
        ]
    );
    }

    public function attachments(): array
    {
        return [];
    }
}