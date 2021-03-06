<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Administrador</title>

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
            <a href="<?php echo site_url('admin') ?>" class="logo">Administrador</a>
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
                      <a href="<?php echo site_url('admin/annadir_cancion') ?>">
                          <span class="glyphicon glyphicon-music" aria-hidden="true"> Añadir canción</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo site_url('admin/crear_sello') ?>">
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
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
          <?php
          if($this->session->flashdata('msg'))
          echo '<div class="alert alert-success">
              '.$this->session->flashdata('msg').'
          </div>';
          ?>
					<h3 class="page-header" style="text-align: center">Página principal del administrador</h3>
                    <p style="text-align: center">Por favor seleccione una opción del panel lateral.</p>
				</div>
			  </div>
          </section>
      </section>
      <!--main content end-->

  </section>

  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- nice scroll -->
    <!--<script src="js/jquery.scrollTo.min.js"></script>-->
    <!--<script src="js/jquery.nicescroll.js" type="text/javascript"></script>-->
    <!-- charts scripts -->
    <!--<script src="assets/jquery-knob/js/jquery.knob.js"></script>-->
    <!--<script src="js/jquery.sparkline.js" type="text/javascript"></script>-->
    <!--<script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>-->
    <!--<script src="js/owl.carousel.js" ></script>

    <<script src="js/fullcalendar.min.js"></script> 
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>

    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>

    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>-->
   
<!--
    <script src="js/scripts.js"></script>

    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>-->
  <script>
  </script>

  </body>
</html>
