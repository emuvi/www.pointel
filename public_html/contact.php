<?php
$sender = "mail@pointel.com.br";
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=UTF-8\n";
$headers .= "From: $sender\n";
$headers .= "Return-Path: $sender\n";
$send = mail("emuvi@pointel.com.br", "Contact from Website", "This is a test message.", $headers, "-f$sender");
if ($send) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem!";
}