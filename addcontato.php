<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';
?>

<section class="container" >

    <h1 align="center"> <strong>Novo Contato</strong></h1>

    <form action="adicionarContato.php" method="post"  >
        <div class="form-group">
            <label>Nome do Contato</label>
            <input type="text" name="nomeContato" placeholder="Nome do Contato" class='form-control'>
        </div>

        <div class="form-group">
            <label>Telefone </label>
            <input type="text" name="telContato" placeholder="Telefone" class='form-control'>
        </div>

        <div class="form-group">
            <label>E-mail </label>
            <input type="text" name="emailContato" placeholder="E-mail" class='form-control'>
        </div>

        <div class="form-group">
            <label>Endereço </label>
            <input type="text" name="enderecoContato" placeholder="Endereço" class='form-control'>
        </div>

        <div class="form-group">
            <label>Notas</label>
            <textarea name="notasContato" cols="5" class='form-control'placeholder="Notas"></textarea>
        </div>


        <div class='form-group' align="center">
            <input type='submit' value="Adicionar Contato" class="btn btn-primary">
        </div>
        
        <div align="center">
            <button value="Voltar" class="btn btn-info" ><a href="listarContatos.php">Cancelar</a></button>
        </div>    

    </form>

</section>

