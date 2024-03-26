<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Attachment;
use Illuminate\Support\Facades\Storage;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name;
    public $email;
    public $text;
    public $file;

     
    
    public function __construct( $name,  $email,  $text, $file)
    {
        $this->name=$name;
        $this->email=$email;
        $this->text=$text;
        $this->file=$file;
    }
 

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $address = $this->email ? new Address($this->email, $this->name) : null;
        return new Envelope(
            from: $address,
            subject: "$this->name ti ha contattato per diventare revisore"
        );
        
    }
/**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath(Storage::path( $this->file))
                  
        ];
    }



    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.revisor',
        );
    }

   
}
