<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Produto editado com sucesso!</h1>
<?php
    include "conecta.php";
    $id = $_REQUEST["id"];
    $sql = "UPDATE PRODUTO set NM_PROD = :nome, CATEGORIA = :cat, QTD_PROD = :quanti, PRECO = :preco, DESCRICAO = :descricao where ID_PROD = :id";
    $sql = $conn->prepare($sql);
    $sql->bindParam(":nome", $_REQUEST["nome"]);
    $sql->bindParam(":cat", $_REQUEST["categoria"]);
    $sql->bindParam(":quanti", $_REQUEST["quantidade"]);
    $sql->bindParam(":preco", $_REQUEST["preco"]);
    //
    //
    $sql->bindParam(":id", $id);
    $sql->execute();
?>

    <a href="index.html">⬅ Voltar ao início</a>

</body>
</html>