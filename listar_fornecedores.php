<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <style>
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 30px;
            color: #630000ff;
        }

        h2 {
            font-weight: 500;
            margin-bottom: 20px;
            color: #720000ff;
            text-align: left;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 6px rgba(112, 2, 2, 0.05);
        }

        th, td {
            padding: 12px 14px;
            text-align: left;
        }

        th {
            background: #f5f5f5;
            font-weight: 600;
            font-size: 14px;
            color: #750000ff;
            border-bottom: 1px solid #e0e0e0;
        }

        td {
            font-size: 14px;
            color: #af0000ff;
            border-bottom: 1px solid #f0f0f0;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #f9f9f9;
        }

        .actions button {
            margin-right: 8px;
            padding: 6px 12px;
            font-size: 13px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background: #fff;
            cursor: pointer;
            transition: 0.2s;
        }

        .actions button:hover {
            background: #f0f0f0;
            border-color: #aaa;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            padding: 8px 18px;
            background: #fff;
            color: #920000ff;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .back-link:hover {
            background: #f5f5f5;
            border-color: #ccc;
        }
    </style>
</head>
<body>
    <h2>Lista de Produtos</h2>

    <?php
    include 'conecta.php';
    $sql = "SELECT * FROM fornecedor";
    $sql = $conn->prepare($sql);
    $sql->execute();
    $result = $sql->fetchAll();
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome do Fornecedor</th>
            <th>Telefone</th>
            <th>E-Mail</th>
            <th>CNPJ</th>
            <th>Endereço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($result as $linha): ?>
            <tr>
                <td><?= $linha['ID_FORN'] ?></td>
                <td><?= $linha['NM_FORN'] ?></td>
                <td><?= $linha['TELEFONE'] ?></td>
                <td><?= $linha['EMAIL'] ?></td>
                <td><?= $linha['CNPJ'] ?></td>
                <td><?= $linha['ENDERECO'] ?></td>
                <td class="actions">
                    <a href="editar.php?ID_FORN=<?= $linha['ID_FORN'] ?>"><button type="button">Editar</button></a>
                    <a href="excluir.php?ID_FORN=<?= $linha['ID_FORN'] ?>" onclick="return confirm('Confirma a exclusão?')"><button type="button">Excluir</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="../index17.php" class="back-link">← Voltar ao Menu</a> <br>
    <a href="https://www.google.com" class="back-link">← Sair</a>
</body>
</html>