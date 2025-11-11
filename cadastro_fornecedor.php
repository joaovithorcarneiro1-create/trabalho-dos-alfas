<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: #fafafa;
            margin: 0;
            padding: 0;
            color: #9e0000ff;
        }

        header {
            text-align: center;
            padding: 30px 15px;
            background-color:  #920000ff;
           color: white;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            margin: 5px 0 0;
            font-size: 15px;
            font-style: italic;
        }

        main {
            display: flex;
            justify-content: center;
            padding: 30px;
        }

        section {
            background: #fff;
            padding: 25px 30px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 4px 10px rgba(148, 0, 0, 0.05);
        }

        section h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 500;
            color: #770000ff;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            color: #b10000ff;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
            transition: border 0.2s;
        }

        input:focus, textarea:focus {
            border-color: #800000ff;
        }

        textarea {
            resize: none;
        }

        .radios {
            display: flex;
            gap: 15px;
            margin-top: 5px;
        }

        .radios label {
            font-weight: normal;
            color: #910000ff;
        }

        button {
            padding: 10px 15px;
            font-size: 14px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.2s;
        }

        button[type="submit"] {
            background: #333;
            color: #fff;
        }

        button[type="submit"]:hover {
            background: #aa0000ff;
        }

        button[type="reset"] {
            background: #f0f0f0;
            color: #af0101ff;
        }

        button[type="reset"]:hover {
            background: #e0e0e0;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            font-size: 14px;
            color: #a10000ff;
            border: 1px solid #ddd;
            padding: 8px 15px;
            border-radius: 6px;
            transition: 0.2s;
        }

        a:hover {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
    <header>
    <h1>Seu Lugar é Aqui</h1>
    <p>Cadastro de Produtos</p>
</header>

    <main>
        <section>
                <h2>Cadastro de Produto</h2>
            <nav>
                <ul>
                        <form action="recebedados17.php" method="POST">
                       <li>     
                        <label>Nome do Fornecedor:</label><br>
                        <input type="text" name="NM_FORN" required><br><br> </li>

                       <li>
                        <label>TELEFONE:</label><br>
                        <input type="text" name="TELEFONE" required><br><br> </li>

                       <li>
                        <label>EMAIL:</label><br>
                        <input type="text" name="EMAIL" required><br><br> </li>

                       <li> 
                        <label>CNPJ:</label><br>
                        <input type="text" name="CNPJ" required><br><br> </li>

                       <li> 
                        <label>ENDERECO:</label><br>
                        <textarea name="ENDERECO" rows="4"></textarea><br><br> </li>
 
                        <li> <button type="submit">Salvar</button> </li>
                        <li><button type="reset">Limpar</button> </li>
                        </form>
                        <br>
                        <li> <a href="../index17.php">Voltar</a> </li>
                 </ul>
                
            </nav>
        </section>
    </main>
</body>
</html>
<!--CREATE TABLE fornecedor(
	ID_FORN INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    NM_FORN VARCHAR(300) NOT NULL,
    TELEFONE VARCHAR(20) NOT NULL,
    EMAIL VARCHAR(1000000) NOT NULL,
    CNPJ VARCHAR(50) NOT NULL,
    ENDERECO VARCHAR(1000000) NOT NULL
); -->
</body>
</html>

