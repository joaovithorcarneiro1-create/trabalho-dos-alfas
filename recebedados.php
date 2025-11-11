<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Produto Cadastrado com Sucesso!</h1>

    <?php
    include 'conecta.php';

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    $desricao = $_POST['desricao'];
    
$sql="INSERT INTO PRODUTO (NM_PROD, CATEGORIA, QTD_PROD, PRECO, DESCRICAO) VALUES (:NM_PROD, :CATEGORIA, :QTD_PROD, :PRECO, :DESCRICAO)";
$stmt=$conn->prepare($sql);
$stmt->bindParam(":NM_PROD", $nome);
$stmt->bindParam(":CATEGORIA", $categoria);
$stmt->bindParam(":QTD_PROD", $quantidade);
$stmt->bindParam(":PRECO", $preco);
$stmt->bindParam(":DESCRICAO", $desricao);
$stmt->execute();
echo "<br><a href='index.html'>⬅ Voltar ao início</a>";
    ?>
</body>
</html>