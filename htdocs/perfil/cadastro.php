<?php
require($_SERVER['DOCUMENT_ROOT'] . '/servidor/config.php');


$content = <<<HTML
<br>
<div class="container-fluid">

    <div class="row">
    
        <div class="col-sm-4 col-sm-offset-4">
            
            <h2>Cadastre-se</h2>
            <form action="cadastro.php" method="post" name="registerform">
                <div class="form-group">
            
                    <label for="name">Nome Completo</label>
                    <input name="nome" type="text" class="form-control" required id="nameuser" placeholder="Digite seu nome">
                </div>
            
            <div class="form-group">
            <div class="form-group">
            
            <label for="usercpf">CPF</label>
            <input name="cpf" type="text" class="form-control" required id="cpf" onkeypress="$(this).mask('000.000.000-00')" placeholder="Digite seu cpf">
    </div>
            
                    <label for="birthdate">Data de nascimento</label>
                    <input name="user_birth" type="date" class="form-control" required id="birth" placeholder="Digite sua data de nascimento">
            </div>
            <div class="form-group">
            
            <label for="useremail">Telefone</label>
            <input name="tel" type="text" class="form-control" required id="emailuser" placeholder="Digite seu e-mail">
    </div>
                
    <div class="form-group">
            
            <label for="userpass">Apartamento</label>
            <input name="apt" type="text" class="form-control" required id="uspass" placeholder="Digite sua senha">
</div>
<div class="form-group">
            
            <label for="userpass">Bloco</label>
            <input name="bloco" type="text" class="form-control" required id="uspass" placeholder="Digite sua senha">
</div>
<div class="form-group">
            
            <label for="userpass">numero</label>
            <input name="numero" type="text" class="form-control" required id="uspass" placeholder="Digite sua senha">
</div>
<div class="form-group">
            
            <label for="userpass">andar</label>
            <input name="andar" type="text" class="form-control" required id="uspass" placeholder="Digite sua senha">
</div>
<div class="form-group">
            
            <label for="userpass">dono</label>
            <input name="dono" type="text" class="form-control" required id="uspass" placeholder="Digite sua senha">
</div>
<div class="form-group">
            
            <label for="userpass">Veículo</label>
            <input name="veiculo" type="text" class="form-control" required id="uspass" placeholder="Digite sua senha">
</div>

            <button type="submit" class="btn btn-lg btn-default btn-outline-dark">
                
                <span class="glyphicon glyphicon-ok "> Enviar</span>
                
            </button>
            
        </form>		
    
    </div>
</div>

HTML;
echo $content;

if ($_SERVER["REQUEST_METHOD"] == "POST") :

        $sql = "INSERT INTO morador ( 
   nome,
   cpf,
   tel,
   apt,
   veiculo
) values ( '{$_POST['nome']}', '{$_POST['cpf']}','{$_POST['tel']}','{$_POST['apt']}', '{$_POST['veiculo']}');

INSERT INTO apartamento (
    bloco,
    numero,
    andar,
    dono) values ( '{$_POST['bloco']}', '{$_POST['tel']}','{$_POST['numero']}','{$_POST['andar']}', '{$_POST['dono']}');
;";

$conn->query($sql);
endif;

?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>