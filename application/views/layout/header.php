<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <!-- <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <a href="index.php" class="navbar-brand"><img src="assets/imgs/logobeatmusic.png"></a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav" style="padding-left: 10px;">
        <li>
          <a href="#">Tienda</a>
        </li>
        <li>
          <a href="<?= base_url()?>escuchar">Escuchar</a>
        </li>
      </ul>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
      </button>

      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <!-- <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
        <ul id="login-dp" class="dropdown-menu">
          <li>
             <div class="row">
                <div class="col-md-12">
                   <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputEmail2">Usuario</label>
                         <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Usuario" required>
                      </div>
                      <div class="form-group">
                         <label class="sr-only" for="exampleInputPassword2">Contraseña</label>
                         <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Contraseña" required>
                                               <div class="help-block text-right"><a href="">¿Contraseña olvidada?</a></div>
                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-block">Login</button>
                      </div>
                      <div class="checkbox">
                         <label>
                         <input type="checkbox"> Recuérdame
                         </label>
                      </div>
                   </form>
                </div>
                <div class="bottom text-center">
                  ¿Eres nuevo? <a href="#"><b>Regístrate</b></a>
                </div>
             </div>
          </li>
      </ul>
    </li>
  </ul> -->
    </nav>

    
  </div>
</header>