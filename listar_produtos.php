<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <h1>Lista de Produtos</h1>
    <?php
include ('conecta.php');
$sql="SELECT * FROM PRODUTO";
$sql=$conn->prepare($sql);
$sql->execute();
$result=$sql -> fetchALL();



?>
<table>
    <tr>
       <th>ID</th>
              <th>Nome do produto</th>
               <th>Categoria</th>
                <th>Quantidade</th>
                 <th>Preço do produto</th>
                  <th>Descrição</th>
                  <th>Editar produto</th>
                  <th>Deletar produto</th>

    </tr>
  <?php
  foreach ($result as $linha) {
 echo "<tr>";
echo "<td>". $linha['ID_PROD']."</td>";
echo "<td>". $linha['NM_PROD']."</td>";
echo "<td>". $linha['CATEGORIA']."</td>";
echo "<td>". $linha['QTD_PROD']."</td>";
echo "<td>". $linha['PRECO']."</td>";
echo "<td>". $linha['DESCRICAO']."</td>";
echo "<td> <form action=''><button type='submit' value='".$linha['ID_PROD']."' name='id'>Editar</button></form></td>";
echo "<td> <form action='deletar_produto.php'><button type='submit' value='".$linha['ID_PROD']."' name='id'>Deletar</button></form></td>";
 echo "</tr>";
  }
?>

    <a href="index.html">⬅ Voltar ao início</a>

</body>
</html>
