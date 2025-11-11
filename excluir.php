<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #d6d6d6ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 2rem 0;
        }
        h2 {
            text-align: center;
            color: #b8b6b6ff;
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-top: 1rem;
            font-weight: bold;
            color: #555;
        }
        .msg-sucesso {
            background: #ccc;
            border: 1px solid  #800000ff;
            padding: 2rem 3rem;
            border-radius: 8px;
            color: #880000ff;
            text-align: center;
            box-shadow: 0 3px 8px rgba(117, 0, 0, 0.1);
        }
        .msg-sucesso h1 {
            margin-bottom: 1rem;
        }
        .msg-sucesso p {
            margin: 0.3rem 0;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <?php
    if(!empty($_GET['ID_FORN'])){
        include 'conecta.php';
        $ID_FORN = $_GET['ID_FORN'];
        $sql="DELETE FROM fornecedor WHERE ID_FORN=:ID_FORN";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':ID_FORN', $ID_FORN);
        $stmt->execute();
        header('location:listar_fornecedores.php');
    }
?>

<div class="msg-sucesso">
        <h1>Produto excluido com sucesso.</h1>
        <p><strong> Listar Produtos:</strong> <?php echo "<a href='listar_fornecedores.php'>Listar Fornecedores</a> | "; ?></p>
        <p><strong>Menu Principal:</strong> <?php echo "<a href='../index17.php'>Menu Principal</a>"; ?></p>
        <p><strong>Sair:</strong> <?php echo "<a href='https://www.google.com'>Sair</a> | "; ?></p>
    </div>

</body>
</html>