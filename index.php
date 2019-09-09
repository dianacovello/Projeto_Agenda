<?php
include_once './class/Conexao.class.php';
include_once './class/Crud.class.php';
include_once './menu.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agenda</title>

    </head>
    <body>

        <h3 align="center"> <strong>BEM-VINDO!</strong> </h3>  <br>
        <h5> ESSA É A SUA AGENDA DE CONTATOS E COMPROMISSO</h5>
        
        <br><br>
        <div align="center">
    <button value="Voltar" class="btn btn-warning" ><a href="listarContatos.php">Ver Contatos</a></button> 
    &nbsp &nbsp &nbsp
    <button value="Voltar" class="btn btn-warning" ><a href="listarCompromissos.php">Ver Compromissos</a></button>
</div> 
    </body>
</html>
