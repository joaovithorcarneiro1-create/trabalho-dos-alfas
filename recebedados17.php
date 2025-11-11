<?php
     include'conecta.php';
    $NM_FORN = $_POST["NM_FORN"];
    $TELEFONE = $_POST["TELEFONE"];
    $EMAIL = $_POST["EMAIL"];
    $CNPJ = $_POST["CNPJ"];
    $ENDERECO = $_POST["ENDERECO"];

    $sql="INSERT INTO fornecedor (NM_FORN, TELEFONE, EMAIL, CNPJ, ENDERECO)
    VALUES (:NM_FORN, :TELEFONE, :EMAIL, :CNPJ, :ENDERECO)";
        $sql=$conn->prepare($sql);
        $sql->bindParam("NM_FORN", $NM_FORN);
        $sql->bindParam(":TELEFONE", $TELEFONE);
        $sql->bindParam(":EMAIL",$EMAIL);  
        $sql->bindParam(":CNPJ", $CNPJ);
        $sql->bindParam(":ENDERECO", $ENDERECO);
        $sql->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Completo</title>
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
            border: 1px solid  #970000ff;
            padding: 2rem 3rem;
            border-radius: 8px;
            color: #700000ff;
            text-align: center;
            box-shadow: 0 3px 8px rgba(139, 0, 0, 0.1);
        }
        .msg-sucesso h1 {
            margin-bottom: 1rem;
        }
        .msg-sucesso p {
            margin: 0.3rem 0;
            font-size: 1.1rem;
        }
    
    </style>
    <link rel="stylesheet" type="text/css"  href="estilo.css">
</head>
<body>
    <div class="msg-sucesso">
        <h1>Produto cadastrado com sucesso.</h1>
        <p><strong>Cadastrar:</strong> <?php echo "<a href='cadastro_fornecedor.php'>Cadastrar Novo Fornecedor</a> | "; ?></p>
        <p><strong> Listar Fornecedores:</strong> <?php echo "<a href='listar_fornecedores.php'>Listar Fornecedores</a> | "; ?></p>
        <p><strong>Menu Principal:</strong> <?php echo "<a href='../index17.php'>Menu Principal</a>"; ?></p>
    </div>
</body>
</html>