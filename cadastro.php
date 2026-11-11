<?php

// Esta página cadastra os dados no banco de dados
include 'conexao.php';
include 'funcoes.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? '';
    $marca = $_POST['marca'] ?? '';
    $modelo = $_POST['modelo'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $material = $_POST['material'] ?? '';
    $tamanho = $_POST['tamanho'] ?? '';
    $peso = $_POST['peso'] ?? '';
    $tensao = $_POST['tensao'] ?? '';
    $estoque = $_POST['estoque'] ?? '';
    $estoque_minimo = $_POST['estoque_minimo'] ?? '';
    $caracteristicas = $_POST['caracteristicas'] ?? '';

    if ($nome !== '' && $marca !== '' && $modelo !== '' && $categoria !== '' && $material !== '' && $tamanho !== '' && $peso !== '' && $tensao !== '' && $estoque !== '' && $estoque_minimo !== '' && $caracteristicas !== '') {
        $resultado = gravar_produto($conexao, $nome, $marca, $modelo, $categoria, $material, $tamanho, $peso, $tensao, $estoque, $estoque_minimo, $caracteristicas);

        if ($resultado) {
            echo 'Produto cadastrado com sucesso!';
        } else {
            echo 'Erro ao cadastrar o produto: ' . mysqli_error($conexao);
        }
    } else {
        echo 'Preencha todos os campos antes de cadastrar.';
    }
}
?>

<style>

* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
    margin: 0;
    padding: 40px 20px;
    min-height: 100vh;
}

div {
    width: 100%;
    max-width: 550px;
    margin: 20px auto;
    padding: 40px;

    background: linear-gradient(145deg, #ffffff, #e8efff);
    border: 1px solid #dbe5ff;
    border-top: 5px solid #2563eb;
    border-radius: 20px;

    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
}

form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

input {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    background: #f8faff;
    font-size: 14px;
    outline: none;
    transition: 0.3s;
}

input:focus {
    border-color: #2563eb;
    background: white;
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.12);
}

input[type="submit"],
button {
    background: linear-gradient(135deg, #2563eb, #1d4ed8);
    color: white;
    border: none;
    border-radius: 8px;
    padding: 13px;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

input[type="submit"]:hover,
button:hover {
    background: linear-gradient(135deg, #1d4ed8, #1e40af);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(37, 99, 235, 0.25);
}
</style>
<div>
<form action="cadastro.php" method="post">
    Nome: <input type="text" name="nome" required><br>
    Marca: <input type="text" name="marca" required><br>
    Modelo: <input type="text" name="modelo" required><br>
    Categoria: <input type="text" name="categoria" required><br>
    Material: <input type="text" name="material" required><br>
    Tamanho: <input type="text" name="tamanho" required><br>
    Peso: <input type="text" name="peso" required><br>
    Tensão: <input type="text" name="tensao" required><br>
    Estoque: <input type="text" name="estoque" required><br>
    Estoque mínimo: <input type="text" name="estoque_minimo" required><br>
    Características: <input type="text" name="caracteristicas" required><br>
    <input type="submit" value="Cadastrar">
</form>
</div>