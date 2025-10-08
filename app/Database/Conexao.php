<?php
$hostname     = "localhost"; // Endereço do servidor do banco de dados
$bancodedados = "usuarios";  // Nome do banco de dados que contem as informações de login
$usuario      = "root";      //usuario do mysql (Padrão=Root)
$senha        = "";          // Senha do mysql (Padrão da senha é em branco)

// Criação do objeto que fará a conexão com os os parâmetros iniciados anteriormente.
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
//Se a variável $mysqli receber algum valor (Código do erro) ele fará:
if ($mysqli->connect_errno) {
    //Dirá o numero do erro e a descrição do mesmo
    echo "Falha ao Conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
