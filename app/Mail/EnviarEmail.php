<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarEmail extends Mailable{
    use Queueable, SerializesModels;

    public $titulo;
    public $img:
    public $desc;
    public $name;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($titulo, $img, $desc, $name, $email){

        $this->titulo = $titulo;
        $this->img = $img;
        $this->desc = $desc;
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view('$this->view')
            ->from($this->email, $this->name)
            ->subject($this->titulo)
            ->with('dados', $this->dados);
    }
}
