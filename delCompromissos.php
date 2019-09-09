<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

$crud = new Crud();
$cond = " WHERE idAgenda=" . $_GET['id'];
$dados = $crud->lerDados('*', 'agenda', $cond);

$itens = $dados->fetch(PDO::FETCH_ASSOC);
?>

<section class="container">

    <h1 align="center"> <strong>Deletar Contato</strong></h1>
    <br><br><br><br><br>

    <form action="deletarCompromisso.php" align="center" >
        <input type="hidden" name="idAgenda" value="<?= $itens['idAgenda'] ?>" >

        <h3>Tem certeza que deseja <strong><u>DELETAR</u></strong> o compromisso <span style="color:#01632f "> <?= $itens['compromisso']; ?></span>?</h3>

        <div align="center">
            <input type='submit' value="DELETAR" class="btn btn-danger">
        
            <button value="Voltar" class="btn btn-info" ><a href="listarCompromissos.php">Cancelar</a></button>
        </div> 