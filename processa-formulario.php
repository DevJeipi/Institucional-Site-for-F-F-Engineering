<?php
// Verifica se é uma requisição POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lê o conteúdo JSON da requisição
    $data = json_decode(file_get_contents("php://input"), true);

    // Extrai os dados do formulário
    $nome = isset($data['nome']) ? $data['nome'] : 'Anônimo';
    $email = isset($data['email']) ? $data['email'] : 'Email não fornecido';
    $motivo = $data['motivo'];
    $mensagem = $data['mensagem'];

    // Prepara o conteúdo do email
    $to = "joao.hubner07@gmail.com";
    $subject = "Mensagem de " . $motivo;
    $body = "Nome: " . $nome . "\nEmail: " . $email . "\nMotivo: " . $motivo . "\n\nMensagem: \n" . $mensagem;
    $headers = "From: joaopedroghilardi@gmail.com";
    if ($email !== 'Email não fornecido') {
        // Se o email foi fornecido, adiciona o campo Reply-To
        $headers .= "\r\nReply-To: " . $email;

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        // Retorna um JSON de sucesso
        echo json_encode(["success" => true]);
    } else {
        // Retorna um JSON de falha
        echo json_encode(["success" => false]);
    }
}}
?>