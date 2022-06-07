<?php
$sender = "mail@pointel.com.br";
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=UTF-8\n";
$headers .= "From: $sender\n";
$headers .= "Return-Path: $sender\n";
$name = $_POST['name'];
$fone = $_POST['fone'];
$mail = $_POST['mail'];
$message = "From website:\n";
$message .= "Nome: $name\n";
$message .= "Telefone: $fone\n";
$message .= "E-mail: $mail\n";
$send = mail("emuvi@pointel.com.br", "Contact from Website", $message, $headers, "-f$sender");
if ($send) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem!";
}