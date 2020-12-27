<?php

namespace Sts\Models\ajax;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(!defined('URL')) {
    header("Location: /");
    exit();
}

class Formulario {

    private $nome;
    private $email;
    private $telefone;
    private $menssagem;
    private $status;
    private $response;

    public function __construct($dados) {
        $objDados = json_decode($dados);
        $toArray = (array) $objDados;
        $this->validateStr($toArray);
    }

    private function validateStr($toArray) {
        //verificando se o array possui elemento vazio
        foreach($toArray as $value) {
            if($value === "") {
                $this->status = "failed";
                $this->response = "<b>Erro, preencha todos os campos!</b>";
                $this->showMessage($this->status, $this->response);
            }  
        }
        //extraindo cada elemento do array
        extract($toArray);
        
        $this->nome = preg_replace('/[^a-zA-Z]/', '', $nome);
        $this->email = preg_replace('/[^a-zA-Z0-9@._-]/', '', $email);
        $this->telefone = preg_replace('/[^0-9]/', '', $telefone);
        $this->menssagem = strip_tags($menssagem);            
        $this->enviarEmail();
    }

    //exibe a menssagem no modal
    private function showMessage($status, $response) {
        exit(json_encode(array("status" => $this->status, "response" => $this->response)));
    }

    private function enviarEmail() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {            
            // título do e-mail
            $subject = "Cliente Formulário - ABCDPORTAS";
            $body = 'Chegou um e-mail do cliente para você do site: '.URL.'<br>'.
            'Nome: '.$this->nome.'<br>'.
            'Email: '.$this->email.'<br>'.
            'Telefone: '.$this->telefone.'<br>'.
            'Menssagem: '.$this->menssagem;
            
            $mail = new PHPMailer();

            //SMTP configurações
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            //meu e-mail
            $mail->Username = "seu_email";   
            $destMail = $mail->Username;
            // senha
            $mail->Password = 'sua_senha';    
            $mail->Port = 465; //587
            $mail->SMTPSecure = "ssl"; //tls
            // Configurações do e-mail
            $mail->isHTML(true);
            // mostra o destinatario quem enviou o e-mail
            $mail->setFrom($this->email);
            $mail->CharSet = 'UTF-8';
            // endereço do e-mail para quem desejamos enviar o e-mail
            $mail->addAddress($destMail);
            $mail->Subject = $subject;
            $mail->Body =  $body;
            
            //retornando resultado para o ajax
            if ($mail->send()) {
                $this->status = "success";
                $this->response = "<b>Email enviado com sucesso!</b>";
                $this->showMessage($this->status, $this->response);
            } else {
                $this->status = "failed";
                $this->response = "<b>Erro ao enviar o E-mail verifique se o e-mail foi digitado corretamente</b>";
                $this->showMessage($this->status, $this->response);
            }
        } 
    } 
}