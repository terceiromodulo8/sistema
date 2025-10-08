<?php
function iniciarSessao()
{
    if (! session_id()) {
        session_start();
    }
}
