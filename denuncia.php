<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : 'Anônimo';
    $email = isset($_POST['email']) ? $_POST['email'] : 'joao.hubner07@gmail.com';
    $motivo = $_POST['motivo'];
    $mensagem = $_POST['mensagem'];

    $to = "joaopedroghilardi@gmail.com";
    $subject = "Nova Denúncia: $motivo";
    $body = "Nome: $nome\nEmail: $email\nMotivo: $motivo\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso.";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
