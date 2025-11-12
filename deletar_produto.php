<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Produto deletado com sucesso!</h1>
<?php
    include "conecta.php";
    $id = $_REQUEST["id"];
    $sql = "DELETE FROM PRODUTO where ID_PROD = :id";
    $sql = $conn->prepare($sql);
    $sql->bindParam(":id", $id);
    $sql->execute();
?>

    <a href="index.html">⬅ Voltar ao início</a>

</body>
</html>