<?php
include_once __DIR__ . '/../Utilidades/request.php';

function loginControlador(array $request)
{
    if ($request['metodo'] === 'GET') {
        require __DIR__ . '/../../views/login/index.php';
    }

    if ($request['metodo'] === 'POST') {
        $loginUsuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
        $senhaUsuario = isset($_POST['senha']) ? $_POST['senha'] : null;

        if (usuarioEntrar($loginUsuario, $senhaUsuario)) {
            definirPagina('listar');
        } else {
            $_SESSION['erro'] = [
                'codigo'   => 401, // O código de resposta de status de erro do cliente HTTP 401 Unauthorized indica que a solicitação não foi aplicada porque não possui credenciais de autenticação válidas para o recurso de destino.
                'mensagem' => 'Usuario ou senha incorretos.',
            ];
            /* TODO: Exibir erro no front-end
            Para exibir o erro no front-end é so adicionar esse bloco de código em qualquer lugar do html que já vai aparecer se der algum erro.
            Sugestão de apresentação do erro:
            ```php
            <?php if (isset($_SESSION['erro']) && $_SESSION['erro']['codigo'] === 401): ?>
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
        }

        header("Location: /sistema/");
    }
}
