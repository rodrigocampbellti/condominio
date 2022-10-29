<?php
require($_SERVER['DOCUMENT_ROOT'] . '/servidor/config.php');
//Aqui, vamos fazer todo o processo de validação do usuário. As variáveis cpf e senha pegam os dados inseridos no formulário e fazem a comparação.
//Ainda não verifiquei se o "if" abaixo está correto.



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // cria variáveis para os campos recebidos do formulário.
    $cpf = preg_replace('/[^0-9]/', '', $_POST['usercpf']);
    $senha = stripslashes($_POST['usersenha']);
    $logged = isset($_POST['logged']) ? 'true' : 'false';

    // query de consulta ao banco de dados.
    $query = <<<SQL
SELECT * FROM funcionario WHERE CPF = '{$cpf}' AND senha = SHA1('{$senha}');
SQL;
    $res = $conn->query($query);
    $row = $res->num_rows;
    //echo $row;

    if ($row != 1) {
        //usuário não localizado...
        echo 'Funcionário não localizado';

        //achou o usuário..
    } else {

        // Extrai dados do usuário e armazena em $ck_user[]:
        $ck_user = $res->fetch_assoc();

        // Formata dados que vão para o cookie em $ck[]:
        $ck = array(
            'id' => $ck_user['id'],
            'name' => $ck_user['nome'],
            'email' => $ck_user['email']
        );


        // Se marcou para manter logado...
        if ($logged == "true") {

            // Gera um cookie de 90 dias
            $ck_validate = time() + (86400 * 90);

            // não marcou para manter logado.
        } else {

            // Cookie de sessão
            $ck_validate = 0;
        }

        // Gera cookie do usuário, gravando dados em formato JSON:
        setcookie("cookie", json_encode($ck), $ck_validate, '/');

        // Extrai o primeiro nome do usuário:
        $fst = explode(' ', $ck_user['nome'])[0];

        echo 'Logado com sucesso!<br> Seja bem vindo.';
    }
} else {
    header('location: /');
}