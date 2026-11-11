<?php
include 'conexao.php';
include 'funcoes.php';

$produtos = listar_produtos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e3a8a, #2563eb);
            padding: 40px 20px;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
            background: linear-gradient(145deg, #ffffff, #e8efff);
            border-radius: 20px;
            border-top: 5px solid #2563eb;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #1e293b;
            margin-bottom: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 14px;
            border: 1px solid #dbe5ff;
            text-align: left;
        }

        th {
            background: #2563eb;
            color: white;
        }

        tr:nth-child(even) {
            background: #f8faff;
        }

        .mensagem {
            text-align: center;
            color: #475569;
            margin: 20px 0;
            font-weight: bold;
        }

        .voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 16px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Produtos cadastrados</h1>

        <?php if (mysqli_num_rows($produtos) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Categoria</th>
                        <th>Material</th>
                        <th>Tamanho</th>
                        <th>Peso</th>
                        <th>Tensão</th>
                        <th>Estoque</th>
                        <th>Estoque Mínimo</th>
                        <th>Características</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($produto = mysqli_fetch_assoc($produtos)): ?>
                        <tr>
                            <td><?php echo $produto['id']; ?></td>
                            <td><?php echo $produto['nome']; ?></td>
                            <td><?php echo $produto['marca']; ?></td>
                            <td><?php echo $produto['modelo']; ?></td>
                            <td><?php echo $produto['categoria']; ?></td>
                            <td><?php echo $produto['material']; ?></td>
                            <td><?php echo $produto['tamanho']; ?></td>
                            <td><?php echo $produto['peso']; ?></td>
                            <td><?php echo $produto['tensao']; ?></td>
                            <td><?php echo $produto['estoque']; ?></td>
                            <td><?php echo $produto['estoque_minimo']; ?></td>
                            <td><?php echo $produto['caracteristicas']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="mensagem">Nenhum produto cadastrado.</p>
        <?php endif; ?>

        <a class="voltar" href="index.html">Voltar para o início</a>
    </div>
</body>
</html>
