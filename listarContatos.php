
<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';


$crud = new Crud();
$dados = $crud->lerDados('*', 'contatos');
?>

<h3 align="center"> <strong>Lista de Contatos</strong> </h3>  <br>

<form action="funcao_btn_contato.php" method="post"> 

    <div class="table-responsive">
        <table class="table table-hover" class="table" >            
            <ul>            
                <tr>
                    <td colspan="0.1em"> Selecionar Varios </td>                    
                    <td> Nome </td>
                    <td> Telefone</td>
                    <td> E-mail</td>
                    <td> Endereço</td>
                    <td> Notas</td>
                    <td colspan="2"> <a href="addcontato.php" class="glyphicon glyphicon-plus-sign"> <strong>Novo Contato </strong></a></td>
                </tr>

                <?php
                while ($item = $dados->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr id="informacao">
                        <td><input type="checkbox" name="excluir[]"  value="<?= $item['idContato'] ?>"></td>                         

                        <td><?= $item['nomeContato']; ?></td>
                        <td><?= $item['telContato']; ?></td>
                        <td><?= $item['emailContato']; ?></td>
                        <td><?= $item['enderecoContato']; ?></td>
                        <td><?= $item['notasContato']; ?></td>
                        <td>
                            <a href="altContato.php?id=<?= $item['idContato']; ?>" class="glyphicon glyphicon-pencil"> EDITAR</a> | 
                            <a href="delContato.php?id=<?= $item['idContato']; ?>" class="glyphicon glyphicon-remove-sign"> DELETAR</a> 
                        </td>
                    </tr>
                <?php } ?>                
            </ul>
        </table>
    </div>

    <div align="left">    
        <input type="submit" value="Excluir Selecionados" class="btn btn-danger" />
    </div> 
</form>


