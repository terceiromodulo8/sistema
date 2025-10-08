<?php definirAcao('login'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Configurações básicas da página, como o tipo de documento, a codificação de caracteres e a visualização em dispositivos móveis. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples</title>

    <link rel="stylesheet" href="./public/login.css">

    <!-- Bloco CSS para estilização da página. -->

</head>

<body>
    <!-- Bloco HTML para a estrutura visível da página. -->
    <div class="login-container">
        <!-- Título do nome da escola. -->
        <div class="escola-nome">
            <img src="./public/logo.png" width="200px">
        </div>
        <h3>Acessar Conta</h3>
        <!-- Formulário de login com campos de usuário e senha. -->
        <form action="/sistema/" method="POST">
            <div class="form-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="senha" required>
            </div>
            <!-- Botão para enviar o formulário. -->
            <button type="submit" class="login-btn">Entrar</button>
        </form>
    </div>
</body>

</html>
