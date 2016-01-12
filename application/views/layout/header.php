<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <a href="<?= base_url()?>" class="navbar-brand"><img src="<?=base_url('assets/imgs/logobeatmusic.png')?>"></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav" style="padding-left: 10px;">
        <li>
          <a href="<?= base_url()?>" class="<?php if($this->uri->segment(1)==""){echo "active";}?>">Inicio</a>
        </li>
        <li>
          <a href="<?= base_url()?>escuchar" class="<?php if($this->uri->segment(1)=="escuchar"){echo "active";}?>">Escuchar</a>
        </li>
        
      </ul>
      <ul class="nav navbar-nav" style="float: right;">
        <li style="float: right;">
          <?php if($this->session->userdata('logged_in')) {
                    if($this->session->tipo == 'admin')
                      echo '<div><a href="'. base_url('admin'). '">Panel de administración</a></div>';
                    echo '<div style="margin-top:10px; float:right;">Hola, '.$this->session->username.'. <a name="logout" style="padding: 5px;" href="tienda/logout">Salir</a></div>';
                    
                }else{ ?>
                  <div style="padding-top:15px;">
                    <i class="glyphicon glyphicon-user"></i>
                    <a href="#" data-toggle="modal" data-target="#loginModal">Iniciar sesión</a>/
                    <a href="#" data-toggle="modal" data-target="#registerModal">Registrarse</a>    
                  </div>
                  
          <?php }?>
          
        </li>
      </ul>


      <!--login modal-->
      <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <?php echo form_open('verifylogin'); ?>
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="text-center">Login</h1>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block">
                      
                        <?php if(validation_errors()){ 
                          echo '<div class="alert alert-danger">';
                                echo validation_errors();
                          echo '</div>';
                          } ?>
                      
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-user"></i>
                        <input name="username" value="<?php echo set_value('username'); ?>" type="text" class="form-control input-lg" placeholder="Usuario">
                      </div>
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input name="password" value="<?php echo set_value('password'); ?>" type="password" class="form-control input-lg" placeholder="Contraseña">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Login</button>
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>  
                </div>
            </div>
            </div>
        </form>
      </div>

      <!--registro modal-->
      <div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
         <?php echo form_open('register'); ?>
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 class="text-center">Registro</h1>
                </div>
                <div class="modal-body">
                    <form class="form col-md-12 center-block">
                        <?php if(validation_errors()){ 
                          echo '<div class="alert alert-danger">';
                                echo validation_errors();
                          echo '</div>';
                          } ?>
                      
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-user"></i>
                        
                        <input name="username" type="text" class="form-control input-lg" placeholder="Usuario">
                      </div>
                      <div class="form-group inner-addon left-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input name="password" type="password" class="form-control input-lg" placeholder="Contraseña">
                        <i class="glyphicon glyphicon-lock"></i>
                        <input name="password" type="password" class="form-control input-lg" placeholder="Repita contraseña">
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-lg btn-block">Aceptar</button>
                        <!-- <span class="pull-right"><a href="#">Registrarse</a></span> -->
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>  
                </div>
            </div>
            </div>
        </form>
      </div>
    </nav>

    
  </div>
</header>