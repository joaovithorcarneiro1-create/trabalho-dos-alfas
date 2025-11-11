<?php
 include 'conecta.php';
 $ID_FORN = $_POST['ID_FORN'];
 $NM_FORN = $_POST["NM_FORN"];
 $TELEFONE = $_POST["TELEFONE"];
 $EMAIL = $_POST["EMAIL"];
 $CNPJ = $_POST["CNPJ"];
 $ENDERECO = $_POST["ENDERECO"];


 $sql="UPDATE fornecedor SET NM_FORN=:NM_FORN, TELEFONE=:TELEFONE,
 EMAIL=:EMAIL, CNPJ=:CNPJ, ENDERECO=:ENDERECO WHERE ID_FORN=:ID_FORN";
 $stmt=$conn->prepare($sql);
 $stmt->bindParam(":ID_FORN", $ID_FORN);
 $stmt->bindParam(":NM_FORN", $NM_FORN);
 $stmt->bindParam(":TELEFONE", $TELEFONE);
 $stmt->bindParam(":EMAIL", $EMAIL);
 $stmt->bindParam(":CNPJ", $CNPJ);
 $stmt->bindParam(":ENDERECO", $ENDERECO);
 $stmt->execute();
 header('location:listar_fornecedores.php');
?>