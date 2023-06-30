<?php

  if(isset($_POST['submit'])) {

include_once('config.php');

    $id = $_POST['id'];
    $Nome = $_POST['Nome'];
    $CNPJ = $_POST['CNPJ'];

    $result = mysqli_query($conexao, "INSERT INTO filial(id, Nome, CNPJ) VALUES ( '$id', '$Nome', '$CNPJ')"); }
 

  if(isset($_POST['insert'])) {

include_once('config.php');

$id_plano = $_POST['id_plano'];
$id_filial = $_POST['id_filial'];
$valor = $_POST['valor'];
$meses = $_POST['meses'];


$result = mysqli_query($conexao, "INSERT INTO planos(id, id_filial, Valor, Meses) VALUES ( '$id_plano', '$id_filial', '$valor', '$meses')");}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastros de Filiais e Planos</title>
  <style>
    body {
      background-color: #f0ffff; /* Cor de fundo verde-água */
    }

    .box {
      width: 400px;
      margin: 20px auto;
      background-color: #f0ffff; /* Cor de fundo verde-água */
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Sombra da caixa */
    }

    .box h2 {
      margin-top: 0;
      color: #008080; /* Cor do texto verde-água */
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #008080; /* Cor do texto verde-água */
    }

    input[type="text"],
    input[type="number"],
    input[type="float"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #008080; /* Cor da borda verde-água */
    }

    input[type="submit"] {
      background-color: #008080; /* Cor de fundo do botão verde-água */
      color: #fff; /* Cor do texto do botão */
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #006666; /* Cor de fundo do botão verde-água (hover) */
    }
  </style>
</head>
<body>
  <div class="box">
    <h2>Filial</h2>
    <form action="academia.php" method="POST">
      <label for="id">ID:</label>
      <input type="text" id="id" name="id">

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="Nome">

      <label for="cnpj">CNPJ:</label>
      <input type="text" id="cnpj" name="CNPJ">

      <input type="submit" value="Enviar" name="submit">
    </form>
  </div>

  <div class="box">
    <h2>Plano</h2>
    <form action="academia.php" method="POST">
      <label for="id_plano">ID_Plano:</label>
      <input type="text" id="id_plano" name="id_plano">

      <label for="id_filial">ID_Filial:</label>
      <input type="text" id="id_filial" name="id_filial">

      <label for="valor">Valor:</label>
      <input type="number" step="0.01" id="valor" name="valor">

      <label for="meses">Meses:</label>
      <input type="number" id="meses" name="meses">

      <input type="submit" value="Enviar" name="insert">
    </form>
  </div>
</body>
</html>