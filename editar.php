
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
        <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            color: #8f0000ff;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .formulario {
            background: #fff;
            padding: 30px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(121, 0, 0, 0.1);
            width: 100%;
            max-width: 480px;
        }

        .formulario h2 {
            margin-bottom: 24px;
            font-weight: 600;
            font-size: 1.6rem;
            color: #990000ff;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            font-size: 0.9rem;
            color: #7e0000ff;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px 14px;
            margin-bottom: 18px;
            border: 1.8px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.5);
        }

        input[disabled] {
            background-color: #e9ecef;
            cursor: not-allowed;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 1.1rem;
            background-color: #007BFF;
            border: none;
            border-radius: 6px;
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    </head>
    <body>

<?php
    include 'conecta.php';
    if(!empty($_GET['ID_FORN'])){
        $ID_FORN=$_GET['ID_FORN'];
        $sql = "SELECT * FROM fornecedor WHERE ID_FORN=:ID_FORN LIMIT 1";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':ID_FORN', $ID_FORN);
        $stmt->execute();
        $result=$stmt->fetch();
    }
    ?>

    <div class="formulario">
        <form action="editarSubmit.php" method="POST"> 
            <label for="">ID</label> 
            <input type="text" name="ID_FORN" id="ID_FORN" value="<?php echo $result['ID_FORN'] ?>" disabled>

            <label for="nome">Nome do Fornecedor:</label> 
            <input type="text" name="NM_FORN" id="nome" value="<?php echo $result['NM_FORN'] ?>">

            <label for="nome">Telefone:</label> 
            <input type="text" name="TELEFONE" id="TELEFONE" value="<?php echo $result['TELEFONE'] ?>">

            <label for="nome">E-Mail:</label> 
            <input type="text" name="EMAIL" id="EMAIL" value="<?php echo $result['EMAIL'] ?>">

            <label for="nome">CNPJ:</label> <br>
            <input type="text" name="CNPJ" id="nome" value="<?php echo $result['CNPJ'] ?>"> <br>

            <label for="nome">Endereço:</label> <br>
            <textarea id="ENDERECO" name="ENDERECO" rows="2"><?php echo $result['ENDERECO'] ?></textarea><br>
        
            <input type="hidden" name="ID_FORN" id="ID_FORN" value="<?php echo $result['ID_FORN'] ?>">
            <input type="submit" value="Enviar">
        </form>
    </div>

    </body>
    </html>