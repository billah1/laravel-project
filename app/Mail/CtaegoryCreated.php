<?php

namespace App\Mail;

use App\Models\category;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CtaegoryCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $category;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(category $category)
    {
        $this->category = $category;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'CtaegoryCreated',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $subject ="category:{$this->category->name}created";
        return new Content(
            view: 'emails.category.category-created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }


}
