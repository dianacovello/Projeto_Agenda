<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';


$crud = new Crud();
/*if ($_POST['excluir']) {
    empty($_POST['excluir']);
        echo "SELECIONE UM COMPROMISSO PARA EXCLUIR";
}*/
foreach ($_POST['excluir'] as $id) {  
    $cond = " WHERE idAgenda=$id";
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

<?php  } ?>


<div align="center">
    <button value="Voltar" class="btn btn-primary" ><a href="listarCompromissos.php">Voltar</a></button>
</div> 




