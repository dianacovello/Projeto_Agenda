<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

$crud = new Crud();
$dados = $crud->lerDados('*', 'agenda');
$datainicio = "dataInicio";
$datafinal = "dataFinal"
?>

<h3 align="center"> <strong>Lista de Compromissos</strong> </h3>  <br>
<form action="funcao_btn_compromisso.php" method="post"> 
    
    <div class="table-responsive">
        <table  class="table table-hover" class="table">
            <ul>            
                <tr>
                    <td colspan="0.1em"> Selecionar Varios </td>
                    <td> Compromisso </td>
                    <td> Data Inicio</td>                
                    <td> Data Final</td>
                    <td> Hora Inicio</td>                
                    <td> Hora Final</td>
                    <td> Local</td>
                    <td> Notas </td>
                    <td colspan="2"><a href="addcompromisso.php" class="glyphicon glyphicon-plus-sign"> <strong>Novo Compromisso </strong></a></td>
                </tr>

                <?php
                while ($item = $dados->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr id="informacao">                
                        <td><input type="checkbox" name="excluir[]"  value="<?= $item['idAgenda'] ?>"></td>     

                        <td><?= $item['compromisso']; ?></td>
                        <td><?= date("d/m/Y", strtotime($item['dataInicio'])); ?></td>
                        <td><?= date("d/m/Y", strtotime($item['dataFinal'])); ?></td>
                        <td><?= $item['horaInicio']; ?></td>
                        <td><?= $item['horaFinal']; ?></td>
                        <td><?= $item['local']; ?></td>
                        <td><?= $item['notasCompromisso']; ?></td>
                        <td>
                            <a href="altCompromissos.php?id=<?= $item['idAgenda']; ?>" class="glyphicon glyphicon-pencil"> EDITAR</a> | 
                            <a href="delCompromissos.php?id=<?= $item['idAgenda']; ?>" class="glyphicon glyphicon-remove-sign"> DELETAR</a> 
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


