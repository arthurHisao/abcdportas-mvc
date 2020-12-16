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

        $toArray = array_map('strip_tags', $toArray);

        extract($toArray);

        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->menssagem = $menssagem;           
    
    }
    
    public function enviarEmail() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // nome de quem está enviando no e-mail
            //$name = "Cliente Formulário";    
            // título do e-mail
            $subject = "Cliente Formulário - ABCDPORTAS";
            // conteúdo do e-mail - irá gerar uma senha aleatoria no e-mail
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
                exit(json_encode(array("status" => $this->status, "response" => $this->response)));
            } else {//se tiver erro na funcao send()
                $this->status = "failed";
                $this->response = "<b>Erro ao enviar o E-mail verifique se o e-mail foi digitado corretamente</b>";
                exit(json_encode(array("status" => $this->status, "response" => $this->response)));
            }
        } 
    } 
}