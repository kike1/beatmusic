<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Añadir canción</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/styles.css"); ?>" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <!-- bootstrap theme -->
    <link href="<?php echo base_url("assets/css/bootstrap-theme.css"); ?>" rel="stylesheet">
    <!-- font icon -->
    <link href="<?php echo base_url("assets/css/elegant-icons-style.css"); ?>" rel="stylesheet" />
    <link href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" rel="stylesheet" />    
  	<link href="css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/css/style-responsive.css"); ?>" rel="stylesheet" />
  	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <!--logo start-->
            <a href="<?php echo site_url('admin') ?>" class="logo">añadir cancion</a>
            <!--logo end-->
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li>
                      <a href="<?php echo site_url('admin/crear_artista') ?>">
                          <span class="glyphicon glyphicon-user" aria-hidden="true"> Añadir artista</span>
                      </a>
                  </li>
				          <li>
                      <a class="" href="<?php echo site_url('admin/annadir_cancion') ?>">
                          <span class="glyphicon glyphicon-music" aria-hidden="true"> Añadir canción</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="<?php echo site_url('admin/crear_sello') ?>">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"> Añadir sello</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="glyphicon glyphicon-music" aria-hidden="true"></i> Añadir canción</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i>Administrador</li>
                    <li><i class="glyphicon glyphicon-music" aria-hidden="true"></i>Añadir canción</li>
                  </ol>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <section class="panel">
                      <header class="panel-heading">
                          Añadir canción
                      </header>
                      <div class="panel-body">
                        <?php echo form_open_multipart('admin/insertar_cancion'); ?>
                          <form role="form">
                              <div class="form-group">
                                  <label for="Artista">Artista</label>
                                  <select multiple class="form-control" name="artista" value="<?php echo set_value('artista'); ?>">
                                    <?php foreach ($artistas->result() as $row) {
                                      echo '<option value="'.$row->id.'">'.$row->nombre.'</option>';
                                    }
                                    ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="Album">Album</label>
                                  <select multiple class="form-control" name="album" value="<?php echo set_value('album'); ?>">
                                    <?php foreach ($album->result() as $row) {
                                      echo '<option value="'.$row->id.'">'.$row->nombre.'</option>';
                                    }
                                    ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="Sello">Sello</label>
                                  <select multiple class="form-control" name="sello" value="<?php echo set_value('sello'); ?>">
                                    <?php foreach ($sellos->result() as $row) {
                                      echo '<option value="'.$row->id.'">'.$row->nombre.'</option>';
                                    }
                                    ?>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="Nombre">Nombre de la canción</label>
                                  <input type="text" id="cnombre" name="nombreCancion" value="<?php echo set_value('nombreCancion'); ?>" class="form-control" required>
                              </div>
                              <div class="form-group">
                                  <label for="inputImagen">Imagen de la canción</label>
                                  <input type="file" id="insertarImagen" name="userfile">
                                  <p class="help-block">Inserte la imagen de la canción.</p>
                              </div>
                              <!--<div class="form-group">
                                  <label for="inputCancion">Archivo canción</label>
                                  <input type="file" id="insertarCancion" name="userfile1">
                                  <p class="help-block">Inserte la canción del artista.</p>
                              </div>-->
                              <button type="submit" class="btn btn-primary">Añadir</button>
                          </form>
                      </div>
                  </section>
              </div>
            </div>
        </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end-->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
  <!-- custom form component script for this page-->
  <script src="js/form-component.js"></script>
  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  </body>
</html>