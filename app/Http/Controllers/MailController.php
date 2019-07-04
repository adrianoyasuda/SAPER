<?php

namespace App\Http\Controllers;

use Request;
use App\GenioModel;
use App\Mail;
use App\Mail\EnviarEmail;

class MailController extends Controller {

    public function enviar() {

        $titulo = Request::input('titulo');
        $img = Request::input('img');
        $desc = Request::input('desc');
        $name = Request::input('name');
        $email = Request::input('email');

        \Mail::to($email)->send( new EnviarEmail("mailImportar", $titulo, $img, $desc, $name, $email) );
                    sleep(1);

        return view('mamb');
    }

    public function concluir() {

        // Título do E-mail
        $titulo = Request::input('titulo');
        // Conteúdo do E-mail
        $conteudo = Request::input('conteudo');

        // Arquivo Selecionado
        $arquivo = Request::file('arq_alunos');
        // Nenhum Arquivo Selecionado
        if (empty($arquivo)) {
            $msg = "Selecione o ARQUIVO para Importação dos E-mails!";

            return view('messagebox')->with('tipo', 'alert alert-danger')
                    ->with('titulo', 'ENTRADA DE DADOS INVÁLIDA')
                    ->with('msg', $msg)
                    ->with('acao', "/");
        }
        // Efetua o Upload do Arquivo
        $path = $arquivo->store('uploads');

        // Efetua a Leitura do Arquivo
        $fp = fopen("../storage/app/".$path, "r");

        if ($fp != false) {
            // Array que receberá os dados do Arquivo
            $dados = array();
            $total = 0;

            while(!feof($fp)) {

                $linha = utf8_decode(fgets($fp));

                // Gera uma Senha Aleatória - 8 dígitos
                $senha = "";
                for($a=0; $a<8; $a++) {
                    $senha = $senha.rand(0, 9);
                }

                if(!empty($linha)) {
                    // Separa os dados
                    $dados = explode("#", $linha);
                    // Nova instância Genio - Configura dados
                    $objGenio = new GenioModel();
                    $objGenio->nome = mb_strtoupper($dados[0], 'UTF-8');
                    $objGenio->nascimento = self::getDataBD($dados[1]);
                    $objGenio->save();

                    // Envia e-mail com a senha para os gênios importados do .txt
                    $dados_mail = array();
                    $dados_mail['nome'] = mb_strtoupper($dados[0], 'UTF-8');
                    $dados_mail['senha'] = $senha;
                    $dados_mail['conteudo'] = $conteudo;
                    $email = mb_strtolower($dados[2], 'UTF-8');
                    \Mail::to($email)->send( new EnviarEmail("mailImportar", $dados_mail, $titulo) );
                    sleep(1);
                    $total++;
                }
            }
        }

        // Importação Finalizada com Sucesso
        $msg = "Um total de '$total' gênios(s) foi importado com sucesso!";

        return view('messagebox')->with('tipo', 'alert alert-success')
                ->with('titulo', 'IMPORTAÇÃO DE DADOS')
                ->with('msg', $msg)
                ->with('acao', "/");
    }

    private static function getDataBD($data) {
        return substr($data, 6, 4)."-".substr($data, 3, 2)."-".substr($data, 0, 2);
    }
}
