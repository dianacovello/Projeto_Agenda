<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

$crud = new Crud();
$cond = " WHERE idAgenda=".$_GET['id'];
$dados = $crud->lerDados('*', 'agenda', $cond);

$itens = $dados->fetch(PDO::FETCH_ASSOC);
?>

<section class="container">

    <h1 align="center"> <strong>Alterar Compromisso </strong></h1>

    <form action="alterarCompromisso.php" method="post"  >
        <input type="hidden" name="idAgenda" value="<?= $itens['idAgenda'] ?>"  >

        <div class="form-group">
            <label>Compromisso</label>
            <input type="text" value="<?= $itens['compromisso']; ?>" name="compromisso" placeholder="Compromisso, Evento, Titulo..." class='form-control'>
        </div>

        <div class="form-group">
            <label>Data Inicio* </label>
            <input type="date" value="<?= date("d/m/Y", strtotime($itens['dataInicio'])); ?>" name="dataInicio" placeholder="Data de inicio do evento" class='form-control' required>
        </div>

        <div class="form-group">
            <label>Data Final* </label>
            <input type="date" value="<?= date("d/m/Y", strtotime($itens['dataFinal'])); ?>" name="dataFinal" placeholder="Data final do evento" class='form-control' required>
        </div>

        <div class="form-group">
            <label>Hora Inicio </label>
            <input type="time" value="<?= $itens['horaInicio']; ?>" name="horaInicio" placeholder="Horario de inicio  do evento" class='form-control'>
        </div>

        <div class="form-group">
            <label>Hora Final </label>
            <input type="time" value="<?= $itens['horaFinal']; ?>" name="horaFinal" placeholder="Hora do término do evento" class='form-control'>
        </div>

        <div class="form-group">
            <label>Local do evento</label>
            <input type="text" value="<?= $itens['local']; ?>" name="local" placeholder="Local do evento" class='form-control'>
        </div>
        <div class="form-group">
            <label>Notas</label>
            <textarea name="notasCompromisso" cols="5" class='form-control'><?= $itens['notasCompromisso']; ?></textarea>
        </div>

        <div class='form-group' align="center">
            <input type='submit' value="Alterar Compromisso" class="btn btn-primary">
        </div>

        <div align="center">
            <button value="Voltar" class="btn btn-info" ><a href="listarCompromissos.php">Cancelar</a></button>
        </div>    
        
    </form>

</section>