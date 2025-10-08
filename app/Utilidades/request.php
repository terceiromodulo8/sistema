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
    $_SESSION['action'] = $action;
}

function acaoAtual(): string
{
    return $_SESSION['action'];
}

function limparPagina()
{
    unset($_SESSION['pagina']);
}

function limparAcao()
{
    unset($_SESSION['action']);
}
