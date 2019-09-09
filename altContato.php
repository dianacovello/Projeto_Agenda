<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

$crud = new Crud();
$cond = " WHERE idContato=".$_GET['id'];
$dados = $crud->lerDados('*', 'contatos', $cond);

$itens = $dados->fetch(PDO::FETCH_ASSOC);

?>

<section class="container">

    <h1 align="center"> <strong>Alterar Contato</strong></h1>

    <form action="alterarContato.php" method="post"  >
        <input type="hidden" name="idContato" value="<?= $itens['idContato'] ?>"  >

        <div class="form-group">
            <label>Nome do Contato</label>
            <input type="text" value="<?= $itens['nomeContato']; ?>" name="nomeContato" placeholder="Nome do Contato" class='form-control'>
        </div>

        <div class="form-group">
            <label>Telefone </label>
            <input type="text" value="<?= $itens['telContato']; ?>" name="telContato" placeholder="Telefone" class='form-control'>
        </div>

        <div class="form-group">
            <label>E-mail </label>
            <input type="text" value="<?= $itens['emailContato']; ?>" name="emailContato" placeholder="E-mail" class='form-control'>
        </div>

        <div class="form-group">
            <label>Endereço </label>
            <input type="text" value="<?= $itens['enderecoContato']; ?>" name="enderecoContato" placeholder="Endereço" class='form-control'>
        </div>


        <div class="form-group">
            <label>Notas</label>
            <textarea name="notasContato" cols="5" class='form-control'><?= $itens['notasContato']; ?></textarea>
        </div>

        <div align="center">
            <input type='submit' value="Alterar Contato" class="btn btn-primary">
        </div>
        
        <div align="center">
            <button value="Voltar" class="btn btn-info" ><a href="listarContatos.php">Cancelar</a></button>
        </div>

    </form>

</section>