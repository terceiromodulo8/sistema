<?php
function usuarioConectado()
{
    if (! isset($_SESSION['usuario'])) {
        return false;
    }

    if (! $_SESSION['usuario']['conectado']) {
        return false;
    }

    return $_SESSION['usuario'];
}

function usuarioEntrar($usuario, $senha)
{
    if ($usuario == 'fontes' && $senha == 'fontes') {
        $_SESSION['usuario']['conectado'] = true;
        return true;
    }
    return false;
}

function usuarioSair()
{
    $_SESSION['usuario']['conectado'] = false;
}

function requerLogin()
{
    if (! usuarioConectado()) {
        header('Location: /sistema/');
        exit;
    }
}
