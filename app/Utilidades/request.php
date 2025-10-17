<?php
function definirPagina(string $pagina)
{
    $_SESSION['pagina'] = $pagina;
}

function paginaAtual(): string
{
    return $_SESSION['pagina'];
}

function definirAcao(string $action)
{
    $_SESSION['acao'] = $action;
}

function acaoAtual(): string | null
{
    return $_SESSION['acao'];
}

function limparPagina()
{
    unset($_SESSION['pagina']);
}

function limparAcao()
{
    unset($_SESSION['acao']);
}
