<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $assunto = strip_tags(trim($_POST["assunto"]));
    $mensagem = trim($_POST["mensagem"]);

    // Verifica se os campos estão preenchidos
    if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Configurações do e-mail
    $to = "joao.hubner07@gmail.com";
    $subject = "Nova mensagem de $nome";
    $body = "Nome: $nome\nEmail: $email\nAssunto: $assunto\n\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Obrigado por entrar em contato! Em breve, nossa equipe responderá.";
    } else {
        echo "Houve um erro ao enviar sua mensagem. Tente novamente mais tarde.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="João Pedro Hubner Ghilardi">
    <meta name="keywords" content="engenharia, construção, obras públicas">
    <meta name="description"
        content="A F&F Engenharia é uma empresa que atua no setor público, que cumpre com seus compromissos, buscando
                    sua excelência desde 2008.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/favicon.ico"/>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>F&F Engenharia | Referência nos empreendimentos</title>
</head>

<body>
    <header class="hFixa"><!--Header Fixa-->
        <div class="centro">
            <nav class="hNav">
                <a class="logo-link" href="https://www.fefengenharia.com.br/"><img class="logo-img"
                        src="./imagens/logotipo_f_e_f-removebg-preview.png" alt="Logo F&F Engenharia"></a>
                <nav class="navbar menu-desktop">
                    <a class="navlink" href="https://www.fefengenharia.com.br/#servicos">Serviços</a></li>
                    <a class="navlink" href="https://www.fefengenharia.com.br/#quem-somos">Quem Somos</a></li>
                    <a class="navlink" href="https://www.fefengenharia.com.br/#compliance">Compliance</a></li>
                    <a class="navlink" href="https://www.fefengenharia.com.br/#contato">Contato</a></li>
                </nav>
                <div class="menu-mobile"></div>
            </nav>
        </div>
    </header><!--Header Fixa-->
    <section class="home"><!--Seção 1 Home-->
        <img src="./imagens/foto11FeF.jpeg" alt="Foto De Obra Em Desenvolvimento">
        <div class="centro">
            <div class="container-headline">
                <h1>Qualidade diferenciada <br> com segurança e <br> responsabilidade.</h1>
                <h2>Parceiros de confiança na execução <br> de obras públicas de grande impacto, <br> garantindo prazo e
                    excelência.</h2>
            </div>
        </div>
    </section><!--Seção 1 Home-->
    <section class="quem-somos" id="quem-somos"><!--Seção 2 Quem Somos-->
        <div class="centro">
            <div class="container-text">
                <h1 class="minitext">QUEM</h1>
                <h2 class="bigtext">SOMOS</h2>
                <div class="block"></div>
            </div>
            <div class="container-descricao">
                <img src="./imagens/foto4FeF.jpeg" alt="Foto De Obra Em Desenvolvimento">
                <p>A F&F Engenharia é uma empresa que atua no setor público, que cumpre com seus compromissos, buscando
                    sua excelência desde 2008.</p>
            </div>
        </div>
    </section><!--Seção 2 Quem Somos-->
    <section class="servicos" id="servicos"><!--Seção 3 Serviços-->
        <div class="centro">
            <h1 class="introducao">Nossa Estrutura Organizacional</h1>
            <div class="container-estrutura">
                <img src="./imagens/novoorganogramaFeF.png" alt="Estrutura Organizacional FeF Engenharia">
            </div>
            <div class="container-institucional">
                <div class="atividades">
                    <h1 class="introducao">Descrição das atividades</h1>
                    <div class="block"></div>
                    <ul>
                        <li class="descricao-atv">
                            <h1>DIRETOR</h1>
                            <p> dirige, planeja, organiza e controla as atividades de diversas áreas da empresa, direcionando políticas de gestão dos recursos financeiros, administrativos e técnicos. Responsável pela supervisão e aplicação das diretrizes convencionadas pelo Programa de Integridade F&F Engenharia e Construções (Compliance Officer).</p>
                        </li>
                        <li class="descricao-atv">
                            <h1>GESTOR ADMINISTRATIVO</h1>
                            <p> coordena as atividades diárias do departamento administrativo, garantindo o funcionamento adequado dos processos de gestão garantindo eficiência e alinhamento com os objetivos estratégicos da empresa. Desenvolve o processo de recrutamento, seleção e treinamento de pessoal. Desenvolve políticas de RH.</p>
                        </li>
                        <li class="descricao-atv">
                            <h1>GESTOR TÉCNICO</h1>
                            <p> desenvolve o planejamento estratégicos para a busca de aperfeiçoamento técnico operacional. Implementa sistemas de tecnologias que buscam a automação dos processos operacionais. Desenvolve projetos de engenharia, planeja e executa obras de engenharia.</p>
                        </li>
                        <li class="descricao-atv">
                            <h1>GESTOR FINANCEIRO</h1>
                            <p> coordena o controle de fluxo de caixa, orçamentos, contas a pagar e receber, coordena as atividades contábeis e fiscais, garantindo a conformidade com a legislação pertinente. Identifica as necessidades de compras juntamente com o Departamento Técnico, gerencia pesquisas de mercado para identificar fornecedores confiáveis, gerencia a formalização e registro de pedidos garantindo a rastreabilidade e controle</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--Seção 3 Serviços-->
    <section class="imagens-servico"><!--Seção 4 Imagens do Serviço-->
        <div class="centro">
            <div class="container-text">
                <h1 class="minitext">NOSSOS</h1>
                <h2 class="bigtext">SERVIÇOS</h2>
                <div class="block"></div>
            </div>
            <div class="wrapper">
                <div class="item item1"></div>
                <div class="item item2"></div>
                <div class="item item3"></div>
                <div class="item item4"></div>
                <div class="item item5"></div>
                <div class="item item6"></div>
                <div class="item item7"></div>
                <div class="item item8"></div>
                <div class="item item9"></div>
                <div class="item item10"></div>
                <div class="item item11"></div>
            </div>
        </div>
    </section><!--Seção 4 Imagens do Serviço-->
    <section class="contato" id="contato">
        <div class="centro">
            <div class="form-ctt">
                <h1 class="introducao">CONTATO</h1>
                <p>Aqui encontra-se o setor de suporte. Caso você quiser fazer comentários, dúvidas, sugestões ou caso precisar de informações basta preencher o formulário abaixo! O mais rápido possível nossa equipe entrará em contato com você. Aguardamos seu contato! </p>
                <form action="processa_formulario.php" method="POST">
                    <label class="form-lb">Seu Nome:*<input class="area" name="nome" type="text" required></label>
                    <label class="form-lb">Seu email:*<input class="area" name="email" type="email" required></label>
                    <label class="form-lb">Assunto:*<input class="area" name="assunto" type="text" required></label>
                    <label class="form-lb">Mensagem:* <textarea class="area" name="mensagem" id="mensagem" required></textarea></label>
                    <label><input class="btn-enviar" type="submit"></label>
                </form>
            </div>
            <div class="outros-ctt">
                <span>Ou entre em contato pelo telefone:</span>
                <h1 class="telefone">+55 (51) 3022-3818</h1>
                <br>
                <br>
                <h3>Endereço</h3>
                <span style="text-align: center;">Rua Félix da Cunha, 69, Bairro Vila Nova, <br> Novo Hamburgo, Rio Grande do Sul.<br> CEP 93520-290</span>
                <br>
                <span>CPNJ 10.533.390/0001-19</span>
            </div>
        </div>
    </section>
    <footer class="rodape">
        © Copyright 2024 - Todos os direitos reservados
    </footer>
</body>

</html>