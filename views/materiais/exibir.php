<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Produtos de Limpeza</title>
    <link rel="stylesheet" href="./public/pesquisa.css">
</head>

<body>
    <div class="container">
        <h1 class="titulo">Produtos de Limpeza</h1>
        <img src="./public/logo.png" alt="Logo Técnico - Industrial Prof. Fontes" class="logo">

        <div class="info-card">
            <h2>Produtos de Limpeza</h2>
            <p><strong>Nome do produto:</strong>
                <?php echo htmlspecialchars($_SESSION['produto']['nome_produto']); ?>
            </p>
            <p><strong>Descrição:</strong>
                <?php echo htmlspecialchars($_SESSION['produto']['descricao']); ?>
            </p>
            <p><strong>Quantidade em estoque:</strong>
                <?php echo htmlspecialchars($_SESSION['produto']['quantidade_em_estoque']); ?> unidades
            </p>
            <p><strong>Data de validade:</strong>
                <?php echo htmlspecialchars($_SESSION['produto']['data_validade']); ?>
            </p>
            <form action="/sistema/" method="GET">
                <input type="hidden" name="pagina" value="listar">
                <button class="fechar-btn">Voltar</button>
            </form>
        </div>
    </div>
</body>

</html>