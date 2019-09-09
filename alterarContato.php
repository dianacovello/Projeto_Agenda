<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

$crud = new Crud();

$cond = " WHERE idContato=".$_POST['idContato'];
$dados = "nomeContato='{$_POST['nomeContato']}',telContato='{$_POST['telContato']}',emailContato='{$_POST['emailContato']}',enderecoContato='{$_POST['enderecoContato']}', notasContato='{$_POST['notasContato']}'";
$alt = $crud->alterarDados('contatos',$dados,$cond);


  if($alt){
      ?>
    <div align="center"> 
        <?php
    echo "<div class='alert alert-success'>Alterado com Sucesso</div>";
  }else{
    echo "<div class='alert alert-danger'>ERRO AO ALTERAR</div>";
  }
?>

</div> 

<div align="center">
    <button value="Voltar" class="btn btn-primary" ><a href="listarContatos.php">Voltar</a></button>
</div> 