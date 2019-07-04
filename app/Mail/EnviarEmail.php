<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarEmail extends Mailable{
    use Queueable, SerializesModels;
    public $view;
    public $dados;
    public $titulo;
    public $name;
    public $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($view, $dados, $titulo, $email, $name ){

        $this->view = $view;
        $this->dados = $dados;
        $this->titulo = $titulo;
        $this->email = $email;
        $this->name = $name;
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
