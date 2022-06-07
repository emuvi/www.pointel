<?php
$envio = mail("emuvi@pointel.com.br", "Contact from Website", "This is a test message.");
if ($envio) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem!";
}