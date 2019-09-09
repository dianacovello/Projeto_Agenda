<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

$nomeContato = $_POST['nomeContato'];
$telContato = $_POST['telContato'];
$emailContato = $_POST['emailContato'];
$enderecoContato = $_POST['enderecoContato'];
$notasContato = $_POST['notasContato'];

$crud = new Crud();
$dados = "nomeContato,telContato,emailContato,enderecoContato,notasContato";
$valores = " '$nomeContato','$telContato','$emailContato','$enderecoContato','$notasContato' ";
$insert = $crud->insereDados('contatos', $dados, $valores);

if ($insert) {
    ?>
    <div align="center"> 
        <?php
        echo "<div class='alert alert-success'>Inserido com Sucesso</div>";
    } else {
        echo "<div class='alert alert-danger'>ERRO AO INSERIR</div>";
    }
    ?>
</div> 

<div align="center">
    <button value="Voltar" class="btn btn-primary" ><a href="listarContatos.php">Voltar</a></button>
</div> 