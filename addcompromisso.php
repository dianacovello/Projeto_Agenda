<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';

?>

<section class="container">

    <h1 align="center"> <strong>Novo Compromisso</strong></h1>

    <form action="adicionarCompromisso.php" method="post"  >
        <input type="hidden" name="idAgenda" value="<?= $itens['idAgenda'] ?>"  >

        <div class="form-group">
            <label>Compromisso</label>
            <input type="text"  name="compromisso" placeholder="Compromisso, Evento, Titulo..." class='form-control'>
        </div>

        <div class="form-group">
            <label>Data Inicio* </label>
            <input type="date" name="dataInicio" placeholder="Data de inicio do evento" class='form-control' required>
        </div>

        <div class="form-group">
            <label>Data Final* </label>
            <input type="date" name="dataFinal" placeholder="Data final do evento" class='form-control' required>
        </div>

        <div class="form-group">
            <label>Hora Inicio* </label>
            <input type="time"  name="horaInicio" placeholder="Horario de inicio  do evento" class='form-control' >
        </div>

        <div class="form-group">
            <label>Hora Final* </label>
            <input type="time"  name="horaFinal" placeholder="Hora do término do evento" class='form-control' >
        </div>

        <div class="form-group">
            <label>Local do evento</label>
            <input type="text" name="local" placeholder="Local do evento" class='form-control'>
        </div>
        <div class="form-group">
            <label>Notas</label>
            <textarea name="notasCompromisso" cols="5" class='form-control' placeholder="Notas, observações.."></textarea>
        </div>

        <div class='form-group' align="center">
            <input type='submit' value="Adicionar Compromisso" class="btn btn-primary">
        </div>

        <div align="center">
            <button value="Voltar" class="btn btn-info" ><a href="listarCompromissos.php">Cancelar</a></button>
        </div> 
    </form>

</section>