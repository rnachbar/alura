<?php
session_start(); // cria uma sessão, pois usamos a sessão para enviar a mensagem de sucesso ou erro (flash), então temos que ter uma sessão para enviar as informações

// Pego as informações do formulário via POST
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once ("PHPMailerAutoload.php"); // Adiciono a biblioteca do PHP MAILER

$mail = new PHPMailer(); // criar um novo email a ser enviado
$mail->isSMTP(); // usar SMTP para envio
$mail->Host = 'smtp.gmail.com'; // set para servidor de SMTP
$mail->Port = 587; // informar a porta do servidor de SMTP
$mail->SMTPSecure = 'tls'; // protocolo de segurança
$mail->SMTPAuth = true; // auteticação
$mail->Username = "raphanach@gmail.com"; // usuário
$mail->Password = "32426174lost"; // senha

$mail->setFrom("alura.php.e.mysql@gmail.com", "Alura Curso PHP e MySQL"); // remetente
$mail->addAddress("raphanach@gmail.com"); // destinatario
$mail->Subject = "Email de contato da loja"; // assunto
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>"); // corpo do e-mail em HTML
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}"; // alguns navegadores de email ou clientes de email não exibem HTML e sim texto puro, então se envia uma outra alternativa.

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php"); // redireciona, nesse caso para o index.php
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo; // em caso de erro exibir a mensagem de erro
    header("Location: contato.php"); // redireciona, nesse caso para o contato.php
}
die();