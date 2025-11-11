<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Fornecedores</title>
    <link rel="stylesheet" href="estilo.css">

    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0; padding: 0;
            color: #830000ff;
        }

        header {
            background-color:  #8a0000ff;
            color: white;
            padding: 20px 10px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        header p {
            margin: 5px 0 0 0;
            font-size: 1.2rem;
            font-style: italic;
        }

        main {
            max-width: 1200px;
            margin: 250px auto;
            padding: 10px;
            background-color: white;
            box-shadow: 0 0 150px rgba(124, 0, 0, 0.1);
            border-radius: 10px;
        }

        section {
            margin-bottom: 30px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        section:last-child {
            border-bottom: none;
        }

        h2 {
            color:  #790000ff;
            margin-bottom: 10px;
            flex: 1 2 100%;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
            flex: 2;
        }

        ul li {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        ul li label {
            margin-left: 8px;
            cursor: pointer;
            flex-grow: 1;
        }

        ul li span.price {
            font-weight: bold;
            color: #6e0000ff;
            margin-left: 10px;
            white-space: nowrap;
        }

        .finalizar form {
            display: flex;
            flex-direction: column;
            gap: 12px;
            max-width: 400px;
        }

        .finalizar label {
            font-weight: bold;
        }

        .finalizar input[type="text"],
        .finalizar input[type="tel"],
        .finalizar select {
            padding: 8px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .finalizar button {
            width: 200px;
            padding: 10px;
            font-size: 1.1rem;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            align-self: flex-start;
            transition: background-color 0.3s ease;
        }

        .finalizar button:hover {
            background-color: #0056b3;
        }


        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <header>
    <h1>Seu Lugar é Aqui</h1>
    <p>Menu Inicial</p>
</header>

 <main>
    <section>
    <h2>Sistema de Gerenciamento de Fornecedores</h2>
    <nav>
        <ul>
             <li>
                <input type="checkbox" id="prato1" name="link"/>
                <li><a href="cadastro_fornecedor.php">Cadastrar Fornecedores</a></li>
            </li>
            <li>
                <input type="checkbox" id="prato2" name="link"/>
                <li><a href="listar_fornecedores.php">Listar Fornecedores</a></li>
            </li>
        </ul>
    </nav>
    </section>
    </main>
</body>
</html>