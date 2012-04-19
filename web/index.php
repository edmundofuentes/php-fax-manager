<?php

// INDEX.php

require_once("../config.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>FaxManager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/own.css" rel="stylesheet">
        <style type="text/css">
          body {
            /*padding-top: 60px;*/
            padding-bottom: 40px;
          }
          .sidebar-nav {
            padding: 9px 0;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
    
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.ico">
    </head>
    
    <body>

        <div class="navbar">
          <div class="navbar-inner">
            <div class="container-fluid">
              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </a>
              <a class="brand" href="#">FaxManager</a>
              <div class="nav-collapse">
                <ul class="nav">
                  <li><a href="javascript:$('#AcercaDe').modal('show')" data-toggle="modal">Acerca De</a></li>
                </ul>
                <ul class="nav pull-right">
                    <li><a href="#">Daniel Martínez A00615657</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>
        
        <!-- POPUP DE ACERCA DE -->
        <div class="modal" id="AcercaDe">
            <div class="modal-header">
              <a class="close" data-dismiss="modal">×</a>
              <h1>FaxManager</h1>
            </div>
            <div class="modal-body">
              <h3>Daniel Martínez <small>A00615657</small></h3>
              <p>Proyecto Final de Multimedia</p>
              <p>Dr. Gabriel Campuzano</p>
            </div>
            <div class="modal-footer">
              &copy; 2012. Daniel Martínez
            </div>
        </div>
        
        <div class="container-fluid">
          
          <div class="row-fluid">
            <div class="span12">
                <div class="hero-unit">
                    <h1>FaxManager</h1>
                    <p>Una solución <strong>simple</strong> para tu manejo de archivos de fax en línea.</p>                  
                </div>
            </div>
          </div>


<?php // Revisa el directorio y muestra los archivos nuevos ?>

          <div class="row-fluid">
            <div class="span12">
                <div class="row-fluid">
                    <div class="span3">
                        <h2>Bandeja de Entrada</h2>
                    </div>
                    <div class="span7">
                        <ul class="breadcrumb">
                          <li class="active"><?php echo DIRECTORIO_ENTRADA; ?></li>
                        </ul>
                    </div>
                    <div class="span2">
                        <a class="btn btn-large btn-success" href="#"><i class="icon-plus icon-white"></i>&nbsp; Agregar Archivo</a>
                    </div>
                </div>
                
                <div class="row-fluid">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nombre de Archivo</th>
                                <th>Fecha de Modificación</th>
                                <th>Remitente</th>
                                <th>Tipo de Fax</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        
                        <?php
                        // ENLISTA TODOS LOS ARCHIVOS DEL DIRECTORIO
                        $archivos = array();
                        if ($handle = opendir(DIRECTORIO_ENTRADA)) {
                            while (false !== ($entry = readdir($handle))) {
                                if ($entry != "." && $entry != ".." && (DIRECTORIO_ENTRADA . $entry) != DIRECTORIO_ARCHIVO) {
                                    $archivos[] = $entry;
                                }
                            }
                            closedir($handle);
                        } else {
                            echo "ERROR: No existe el directorio.";
                        }
                        
                        echo "<tbody>";
                        foreach($archivos as $archivo){
                            echo "<form action='archivar.php' method='POST'>
                            <tr>
                                <td>
                                    <a href='file://" . DIRECTORIO_ENTRADA . $archivo . "' target='_blank'>$archivo</a>
                                    <input type='hidden' name='archivo' value='" . $archivo . "' />
                                </td>
                                <td>" . date ("F d Y H:i:s.", filemtime(DIRECTORIO_ENTRADA . $archivo)) . "</td>
                                <td><input type='text' name='remitente' placeholder='Remitente' class='input-medium'></td>
                                <td><input type='text' name='tipo' placeholder='Tipo de Fax' class='input-medium'></td>
                                <td>
                                    <button type='submit' class='btn btn-mini btn-primary'><i class='icon-share-alt icon-white'></i>&nbsp; Archivar &nbsp;</button>
                                </td>
                            </tr></form>";
                        }
                        
                        echo "</tbody>";
                        
                        ?>
                        
                    </table>
                </div>
                
                <hr>
                <?php
                
                // revsa si se hizo una búsqueda
                $search = isset($_GET['s'])? $_GET['s'] : '';
                
                if($search != ''){
                    $mensaje = "MOSTRANDO LOS RESULTADOS DE LA BÚSQUEDA DE <b>'$search'</b>";
                } else {
                    $mensaje = "MOSTRANDO ÚNICAMENTE LOS 50 FAXES MÁS RECIENTES";
                }
                
                ?> 
                <div class="row-fluid">
                    <div class="span3">
                        <h2>Archivados Recientes </h2>
                    </div>
                    <div class="span5">
                        <h2><small style="font-size:11px !important"><?php echo $mensaje;?></small></h2>
                    </div>
                    <div class="span4">
                        <form class="form-search pull-right" action="index.php" method="GET">
                            <input type="text" name="s" class="input-large search-query" placeholder="Búsqueda por Remitente o Tipo">
                            <button type="submit" class="btn"><i class="icon-search"></i>&nbsp; Buscar</button>
                        </form>
                    </div>
                </div>
                
                <?php
                /* CONSULTA LA BASE DE DATOS */
                
                // inicia la conexión de MySQL
                $con = mysql_connect(DB_IP . ":" . DB_PUERTO, DB_USER, DB_PASS);
                mysql_select_db(DB_NOMBRE, $con);
                
                if($search != ''){
                    $query = "SELECT * FROM archivos WHERE (remitente LIKE '%$search%') OR (tipo LIKE '%$search%')";
                } else {
                   $query = "SELECT * FROM archivos LIMIT 50"; 
                }
                $result = mysql_query($query);
                
                // carga las variables
                $archivos_recientes = array();
                while($row = mysql_fetch_array($result))
                {
                    $archivos_recientes[] = $row;
                }
                
                // cierra conexión
                mysql_close($con);
                
                ?>
                
                <div class="row-fluid">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Remitente</th>
                                <th>Nombre de Archivo</th>
                                <th>Tipo de Fax</th>
                                <th>Fecha de Archivado</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        
                        <?php
                        /* DESPLIEGA LA TABLA */
                        foreach($archivos_recientes as $archivo_reciente){
                            echo "<tr>
                            <td>{$archivo_reciente['id']}</td>
                            <td>{$archivo_reciente['remitente']}</td>
                            <td>{$archivo_reciente['nombre']}</td>
                            <td>{$archivo_reciente['tipo']}</td>
                            <td>{$archivo_reciente['fecha']}</td>
                        </tr>";
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div><!--/row-fluid 'table' -->
          
    
          <hr>
    
          <footer>
            <p>&copy; 2012. <a href="mailto:danielmtz9@hotmail.com">Daniel Martínez</a> A00615657.</p>
          </footer>
    
        </div><!--/.fluid-container-->
    
        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        
        <script>
        $(document).ready( function() {
            $('.dropdown-toggle').dropdown();
            $('#AcercaDe').modal();
            $('#AcercaDe').modal('hide');
        });
        </script>
  </body>

