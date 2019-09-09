<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';
include_once './class/TrataDataInicio.class.php';
include_once './class/TrataDataFinal.class.php';


$compromisso  = $_REQUEST['compromisso'];
$dataInicio     = $_REQUEST['dataInicio'];
$dataFinal   = $_REQUEST['dataFinal'];
$horaInicio  = $_REQUEST['horaInicio'];
$horaFinal = $_REQUEST['horaFinal'];
$local   = $_REQUEST['local'];
$notasCompromisso  = $_REQUEST['notasCompromisso'];
      
$dataInicio = TrataDataInicio::dataDB($dataInicio);
$dataFinal = TrataDataFinal::dataDB($dataFinal);


$crud = new Crud();
$dados = "compromisso,dataInicio,dataFinal,horaInicio,horaFinal,local,notasCompromisso";
$valores = " '$compromisso','$dataInicio','$dataFinal','$horaInicio','$horaFinal','$local','$notasCompromisso' ";
$insert = $crud->insereDados('agenda', $dados, $valores);


if($insert){
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
    <button value="Voltar" class="btn btn-primary" ><a href="listarCompromissos.php">Voltar</a></button>
</div> 