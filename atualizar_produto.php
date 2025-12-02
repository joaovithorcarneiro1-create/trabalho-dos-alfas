<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>

    <h1>Atualize o Produto</h1>

    <?php
    $id = $_REQUEST['id'];
    include "conecta.php";
    $sql = "SELECT * FROM PRODUTO Where ID_PROD = :id";
    $sql = $conn->prepare($sql);
    $sql->bindParam(":id", $id);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    echo '<form action="atualizar_produto2.php" method="POST">

        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" value="'.$result['NM_PROD'].'" required><br><br>

        <label>Categoria:</label><br>
        <input type="radio" name="categoria" value="Eletrônicos" required> Eletrônicos
        <input type="radio" name="categoria" value="Alimentos" required> Alimentos
        <input type="radio" name="categoria" value="Vestuário" required> Vestuário
        <br><br>

        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="quantidade" min="0" value="'.$result['QTD_PROD'].'" required><br><br>

        <label>Preço (R$):</label><br>
        <input type="number" name="preco" step="0.01" value="'.$result['PRECO'].'" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="desricao" rows="4" value="'.$result['DESCRICAO'].'" cols="40"></textarea><br><br>

        <button type="submit" value="' . $id . '" name="id">Editar</button>

    </form>'
        ?>

    <br>
    <a href="index.html">⬅ Voltar ao início</a>

</body>

</html>