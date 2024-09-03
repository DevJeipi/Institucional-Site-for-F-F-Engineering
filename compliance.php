<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="João Pedro Hubner Ghilardi">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/favicon.ico" />
    <link rel="stylesheet" href="./css/stylecompliance.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap">
</head>
<title>Canal de Denúncia | F&F Engenharia</title>

<body>
    <main>
        <div class="logo"><img src="./imagens/logotipo_f_e_f-removebg-preview.png" alt="Logo F&F Engenharia"></div>
        <h1>Canal De Denúncia</h1> 
        <form action="denuncia.php" method="post">
            <label for="nome">Nome(Opcional):</label>
            <input class="form-input" type="text" id="nome" name="nome">

            <label for="email">E-mail(Opcional):</label>
            <input class="form-input" type="email" id="email" name="email">

            <label for="motivo">Motivo:</label>
            <select class="form-input" name="motivo" id="motivo" aria-placeholder="Sim" required>
                <option value="escolher">--Escolha uma opção--</option>
                <option value="Sugestão">Sugestão</option>
                <option value="Crítica">Crítica</option>
                <option value="Dúvida">Dúvida</option>
                <option value="Denúncia">Denúncia</option>
            </select>

            <label for="mensagem">Mensagem:</label>
            <textarea class="form-input" name="mensagem" id="mensagem" required></textarea>

            <input class="form-input btn" type="button" value="Enviar" class="btn-form">
        </form>
    </main>
</body>

</html>