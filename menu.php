<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Agenda</title>

        <link rel="stylesheet" href="bootsrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootsrap/css/bootstrap-theme.min.css">

        <script src="jquery/jquery-3.2.0.min.js"></script>
        <script src="bootsrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css"/>        

        <link href="https://fonts.googleapis.com/css?family=Anton|Josefin+Sans|Lobster|Pacifico" rel="stylesheet">

    </head>
    <body>

        <nav class="navbar navbar-default-fixed-top">
            <div class="container-fluid">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">Agenda</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <!-- <li><a href="#">Link</a></li>-->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contatos <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listarContatos.php">Ver Contatos</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="addcontato.php">Adicionar Contato</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agenda <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="listarCompromissos.php">Ver Compromissos</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="addcompromisso.php">Adicionar Compromisso</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text"  class="form-control"  placeholder="Buscar" >
                                </div>
                                <button type="submit"  class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                            
                            <div align="right" class="horaAtual">
                                <?php                              
                                $h = "3"; //HORA DO FUSO ((BRASÍLIA = -3) COLOCA-SE SEM O SINAL -).
                                $hm = $h * 60;
                                $ms = $hm * 60;
//COLOCA-SE O SINAL DO FUSO ((BRASÍLIA = -3) SINAL -) ANTES DO ($ms). DATA
                                $gmdata = gmdate("d/m/Y", time() - ($ms));
//COLOCA-SE O SINAL DO FUSO ((BRASÍLIA = -3) SINAL -) ANTES DO ($ms). HORA
                                $gmhora = gmdate("G:i", time() - ($ms));
                                
                                echo $gmdata ." <br> ". $gmhora;    
                                
                                ?>
                            </div> 
                        </div>

                </nav>
                <br><br>