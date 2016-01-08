<div class="container" style="margin-top: 70px;">
    <div class="row">

    <div class="col-md-7" id="leftCol">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="<?php echo base_url("assets/imgs/11.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951009.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951011.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951013.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951014.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    <div class="item">
                      <img src="<?php echo base_url("assets/imgs/12951015.jpg"); ?>" alt="...">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>


                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
</div> 

        <div class="col-md-5">        
            <div class="list-group">
              <a href="#" class="list-group-item active">
                NUEVO
              </a>
              <div class="list-group-item">DAMIAN & SKRILLEX<audio src="<?php echo base_url('assets/audio/1.mp3') ?>" type="audio/mp3" controls  /></div>
              <div class="list-group-item">SKRILLEX<audio src="<?php echo base_url('assets/audio/2.mp3') ?>" type="audio/mp3" controls  /></audio></div>
              <div class="list-group-item">X<audio src="<?php echo base_url('assets/audio/.mp3') ?>" type="audio/mp3" controls  /></audio></div>
              <div class="list-group-item">Y<audio src="<?php echo base_url('assets/audio/.mp3') ?>" type="audio/mp3" controls  /></audio></div>
            
            </div>

        </div>
      
        <div class="col-md-12 borde">
        <hr>
	        <center><h2 id="sec1">ARTISTAS</h2></center>   
          <hr>    
              <?= $this->session->Artistas ?>
        </div>

        <div class="col-md-12 borde">
        <hr>
	        <center><h2 id="sec2">ALBUM</h2></center>
          <hr>
               <?= $this->session->Album ?>
        </div>
    </div>        
</div>