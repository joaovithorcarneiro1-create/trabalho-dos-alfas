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
$sql="SELECT * FROM tb_produto";
$sql=$conn->prepare($sql);
$sql->execute();
$result=$sql -> fetchALL();



?>
<table>
    <tr>
       <th>ID</th>
              <th>Nome do produto</th>
               <th>categoria</th>
                <th>quantidade</th>
                 <th>preço do produto</th>
                  <th>descrição</th>

    </tr>
  <?php
  foreach ($result as $linhas) {
 echo "<tr>";
echo "<td>". $linha['id']."</td>";
echo "<td>". $linha['NM_PROD']."</td>";
echo "<td>". $linha['CATEGORIA']."</td>";
echo "<td>". $linha['QTD_PROD']."</td>";
echo "<td>". $linha['PRECO']."</td>";
echo "<td>". $linha['DESRICAO']."</td>";
  }
?>

    <a href="index.html">⬅ Voltar ao início</a>

</body>
</html>
