<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';


$crud = new Crud();
$cond = " WHERE idAgenda=" . $_GET['idAgenda'];
$dados = $crud->deletarDados('agenda', $cond);



if ($dados) {
    ?>
    <div align="center"> 
        <?php
        echo "<div class='alert alert-success'> Deletado com sucesso!</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'> Erro ao deletar.</div>";
    }
    ?>
</div> 

<div align="center">
    <button value="Voltar" class="btn btn-primary" ><a href="listarCompromissos.php">Voltar</a></button>
</div> 
