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
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="João Pedro Hubner Ghilardi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
    <link rel="stylesheet" href="./style.css">
</head>
<title>Canal de Denúncia | F&F Engenharia</title>

<body>
    <main>
        <div class="logo"><img src="../imagens/logotipo_f_e_f-removebg-preview.png" alt="Logo F&F Engenharia"></div>
        <h1></h1>
        <form action="denuncia.php" method="post">
            <label for="nome">Nome(Opcional):</label>
            <input type="text" id="nome" name="nome">

            <label for="email">E-mail(Opcional):</label>
            <input type="email" id="email" name="email">

            <label for="motivo">Motivo:</label>
            <select name="motivo" id="motivo" required>
                <option value="Sugestão">Sugestão</option>
                <option value="Crítica">Crítica</option>
                <option value="Dúvida">Dúvida</option>
                <option value="Denúncia">Denúncia</option>
            </select>

            <label for="mensagem">Mensagem:</label>
            <textarea name="mensagem" id="mensagem" required></textarea>

            <input type="button" value="botão" class="btn-form">
        </form>
    </main>
</body>

</html>