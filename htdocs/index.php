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
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    
    <title>login</title>
</head>
<body>
    
  <form action="valida.php" method="post" name="formlogin">
    <div class="container">
      <h1>Condomínio Belas Artes</h1>
      <p>Faça o login</p>
      <hr>
  <div class="form-group">
    <label for="exampleInputCpf">CPF</label>
    <input type="text" class="form-control" id="exampleInputCpf" aria-describedby="textHelp" placeholder="Digite o CPF" name="usercpf" onkeypress="$(this).mask('000.000.000-00')">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "usersenha">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="logged" value="true">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Logar!</button>
</div>
</form>
HTML;

echo $content;