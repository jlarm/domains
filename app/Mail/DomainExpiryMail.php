<?php

namespace App\Mail;

use App\Models\Domain;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DomainExpiryMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private Domain $domain;

    public function __construct(Domain $domain)
    {
        $this->domain = $domain;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@armp.com'),
            subject: $this->domain->name . ' Domain Expiring Soon',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.domain-expiry',
            with: [
                'days' => $this->domain->expiration->diffInDays(now()),
                'domain' => $this->domain,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
