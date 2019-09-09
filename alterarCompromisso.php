<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';
include_once './class/TrataDataInicio.class.php';
include_once './class/TrataDataFinal.class.php';

$compromisso = $_POST['compromisso'];        
$dataInicio = $_POST['dataInicio'];
$dataFinal =  $_POST['dataFinal'];
$horaInicio = $_POST['horaInicio'];
$horaFinal = $_POST['horaFinal'];
$local = $_POST['local'];
$notasCompromisso = $_POST['notasCompromisso'];

    
$dataInicio = TrataDataInicio::dataDB($dataInicio);
$dataFinal = TrataDataFinal::dataDB($dataFinal);

$crud = new Crud();
$cond = " WHERE idAgenda=" . $_POST['idAgenda'];
$dados = "compromisso='$compromisso',dataInicio='$dataInicio',dataFinal='$dataFinal',horaInicio='$horaInicio',horaFinal='$horaFinal',local='$local',notasCompromisso='$notasCompromisso' ";
$alt = $crud->alterarDados('agenda', $dados, $cond);

/*if(empty($horaFinal)){
    echo "";
}*/
  

if ($alt) {
    ?>
    <div align="center"> 
        <?php
        echo "<div class='alert alert-success'>Alterado com Sucesso</div>";
    } else {
        echo "<div class='alert alert-danger'>ERRO AO ALTERAR</div>";
    }
    ?>
</div> 

<div align="center">
    <button value="Voltar" class="btn btn-primary" ><a href="listarCompromissos.php">Voltar</a></button>
</div> 