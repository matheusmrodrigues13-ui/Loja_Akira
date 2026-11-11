<?php
// Arquivo de conexão com o banco de dados
$servidor = "Localhost";
$usuario = "root";
$senha = "123456";
$banco = "Loja_Akira";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8mb4");
