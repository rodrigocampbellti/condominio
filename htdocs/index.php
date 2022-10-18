<?php
// Puxa a conexão com o banco de dados
require($_SERVER['DOCUMENT_ROOT'] . '/servidor/config.php');
//Código php que antes estava aqui foi transferido para a página valida.php

$content = <<<HTML
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
     <title>login</title>
</head>
<body>
    
  <form action="valida.php" method="post" name="formlogin">
    <div class="container">
      <h1>Condomínio Belas Artes</h1>
      <p>Faça o login</p>
      <hr>
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">CPF</label>
    <input type="email" class="form-control" id="exampleInputCpf" aria-describedby="emailHelp" placeholder="Digite o CPF" name = "usercpf">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "usersenha">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Logar!</button>
</form>

HTML;

echo $content;
?>
