<?php
require_once __DIR__ . "/../Modelo/Entidade/Material.php";

/**
 * @param array $request = ['metodo' => 'GET', 'pagina' => ''] || ['metodo' => 'POST', 'acao' => '']
 */
function materiaisControlador(array $request)
{
    if ($request['metodo'] === 'POST') {
        adicionarMaterial();
        exit;
    }

    if ($request['metodo'] === 'GET') {
        switch ($request['pagina']) {
            case 'adicionar':
                require __DIR__ . '/../../views/materiais/adicionar.php';
                exit;

            case 'exibir':
                exibirMaterial();
                exit;

            case 'listar':
                listarMateriais();
                exit;
        }
    }
}

function adicionarMaterial()
{
    $nomeMaterial       = trim($_POST['nome_produto'] ?? '');
    $descricaoMaterial  = trim($_POST['descricao'] ?? '');
    $quantidadeMaterial = (int) ($_POST['quantidade_em_estoque'] ?? -1);
    $validadeMaterial   = trim($_POST['data_validade']) ?? date('Y-m-d');

    if (! $nomeMaterial || $nomeMaterial == '') {
        $_SESSION['erro'] = [
            'codigo'   => 400,
            'campo'    => 'nome_do_produto',
            'mensagem' => "Nome do produto invalido.",
        ];
        header('Location: /sistema/');
        exit;
    }
    if (! $descricaoMaterial || $descricaoMaterial == '') {
        $_SESSION['erro'] = [
            'codigo'   => 400,
            'campo'    => 'descricao',
            'mensagem' => "Descrição do produto invalida.",
        ];
        header('Location: /sistema/');
        exit;
    }
    if (! $quantidadeMaterial || $quantidadeMaterial < 0) {
        $_SESSION['erro'] = [
            'codigo'   => 400,
            'campo'    => 'quantidade_em_estoque',
            'mensagem' => "Quantidade do produto invalida.",
        ];
        header('Location: /sistema/');
        exit;
    }
    if (! $validadeMaterial || $validadeMaterial == '') {
        $_SESSION['erro'] = [
            'codigo'   => 400,
            'campo'    => 'data_validade',
            'mensagem' => "Data de validade do produto invalida.",
        ];
        header('Location: /sistema/');
        exit;
    }
    if ($validadeMaterial < date('Y-m-d')) {
        $_SESSION['erro'] = [
            'codigo'   => 400,
            'campo'    => 'data_validade',
            'mensagem' => "Data de validade do produto não pode ser anterior a data de hoje.",
        ];
        header('Location: /sistema/');
        exit;
    }

    $material = new Material($nomeMaterial, $descricaoMaterial, $quantidadeMaterial, $validadeMaterial);
    // TODO: Inserção no banco de dados
    definirPagina('/listar');
    /* TODO: Exibir erro no front-end
    Para exibir o erro no front-end é so adicionar esse bloco de código em qualquer lugar do html que já vai aparecer se der algum erro.
    Sugestão de apresentação do erro:
    ```php
    <?php if (isset($_SESSION['erro']) && $_SESSION['erro']['codigo'] === 400): ?>
        <div class="erro">
            <p class="mensagem">
                <?php
                    echo $_SESSION['erro']['mensagem'];
                    unset($_SESSION['error']);
                ?>
            </p>
        </div>
    <?php endif?>
    ```
    O estilo vocês façam como preferir.
    */
    header('Location: /sistema/');
    exit;
}

function listarMateriais()
{
    require __DIR__ . '/../../views/materiais/listar.php';
}

function exibirMaterial()
{
    if (! isset($_SESSION['produto'])) {
        // TODO: prevenção de erros
        /*
        definirPagina('listar');
        header('Location: /sistema');
        exit;
        */
    }
    require __DIR__ . '/../../views/materiais/exibir.php';
}
