<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Cadastro de Produto</h1>

    <form action="recebedados.php" method="POST">

        <label>Nome do Produto:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Categoria:</label><br>
        <input type="radio" name="categoria" value="Eletrônicos" required> Eletrônicos
        <input type="radio" name="categoria" value="Alimentos"> Alimentos
        <input type="radio" name="categoria" value="Vestuário"> Vestuário
        <br><br>

        <label>Quantidade em Estoque:</label><br>
        <input type="number" name="quantidade" min="0" required><br><br>

        <label>Preço (R$):</label><br>
        <input type="number" name="preco" step="0.01" required><br><br>

        <label>Descrição:</label><br>
        <textarea name="desricao" rows="4" cols="40"></textarea><br><br>

        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">

    </form>

    <br>
    <a href="index.html">⬅ Voltar ao início</a>

</body>
</html>
