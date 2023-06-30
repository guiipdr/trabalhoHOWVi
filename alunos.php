<?php

  if(isset($_POST['submit']))

  {

include_once('config.php');

    $idFilial = $_POST['idFilial'];
    $Nome = $_POST['Nome'];
    $CPF = $_POST['CPF'];
    $Data_Nascimento = $_POST['Data_Nascimento'];
    $Endereço = $_POST['Endereço'];
    $Plano = $_POST['Plano'];

    $result = mysqli_query($conexao, "INSERT INTO alunos(idFilial, Nome, CPF, Data_Nascimento, Endereço, Plano) VALUES ( '$idFilial', '$Nome', '$CPF', '$Data_Nascimento', '$Endereço', '$Plano')");
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Alunos</title>
  <style>
    body {
      background-color: #f0ffff; /* Cor de fundo verde-água */
    }

    form {
      width: 400px;
      margin: 0 auto;
      background-color: #f0ffff; /* Cor de fundo verde-água */
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); /* Sombra da caixa */
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #008080; /* Cor do texto verde-água */
    }

    input[type="text"],
    input[type="number"],
    input[type="date"],
    textarea {
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
  <form action="alunos.php" method="POST">
    <label for="id_filial">ID_Filial:</label>
    <input type="text" id="id_filial" name="idFilial">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="Nome">

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="CPF">

    <label for="birthdate">Data de Nascimento:</label>
    <input type="date" id="birthdate" name="Data_Nascimento">

    <label for="residencia">Residência:</label>
    <input type="text" id="residencia" name="Endereço">

    <label for="plano">Plano:</label>
    <input type="text" id="plano" name="Plano">

    <input type="submit" value="Enviar" name="submit">
  </form>
</body>
</html>
