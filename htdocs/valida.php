<?php
require($_SERVER['DOCUMENT_ROOT'] . 'index.php');
//Aqui, vamos fazer todo o processo de validação do usuário. As variáveis cpf e senha pegam os dados inseridos no formulário e fazem a comparação.
//Ainda não verifiquei se o "if" abaixo está correto.

$cpf = $_POST ['usercpf'];

$senha = $_POST ['usersenha'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $query = <<<SQL
SELECT * FROM funcionarios WHERE CPF = '{$cpf}' AND senha = SHA1('{$senha}');
SQL;

    $res = $conn->query($query);

    $row = mysqli_num_rows($res);

    echo $row;
}
