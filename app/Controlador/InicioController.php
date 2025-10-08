<?php
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    header('Location: /sistema/');
    exit;
}
