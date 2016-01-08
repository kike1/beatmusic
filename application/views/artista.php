<div class="container" style="margin-top: 70px; padding: 0 70px;">

<?php foreach($this->session->artistav as $row) ?>
  <div class="row">
    <div class="col-md3">
      <h1> <?= $row->nombre ?> </h1>  
    </div>
    
  </div>
  <div class="row">
    <div class="col-md-6 artista-img">
      <?php 
      
        $img = base_url('assets/imgs/artistas/'.$row->img.'');
        echo '<img src="'.$img.'" class="img-responsive img-rounded">';
      ?>
    </div>

    <div class="col-md-6 artista-desc">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Descripción:</h3>
          </div>
          <div class="panel-body" style="color:white;">
              <p><?= $row->descripcion ?></p>
          </div>
        </div>
    </div> 
  </div>    

  <div class="row">
    <div class="col-md-12 artista-tracks">
      <h2> Tracks </h2>  
        <?php if($this->session->tracks) { ?>
            <hr>
            <?php foreach($this->session->tracks as $track){ ?>
                <div class="row info-track">
                  <div class="col-md-2">
                    <? $imgtrack = base_url('assets/imgs/tracks/'.$track->img.''); ?>
                    <? echo '<img src="'.$imgtrack.'" class="img-responsive img-circle   artist-song">'; ?>  
                  </div>
                  <div class="col-md-10">
                    <h3><?=$track->nombre?></h3>
                    <?php 
                    if(file_exists('assets/audio/'.$track->nombre.'.mp3')) {?>
                      <audio controls class="col-md-6">
                          <source src="<?=base_url('assets/audio/'.$track->nombre.'.mp3')?>" type="audio/mpeg">
                          Tu navegador no soporta la carga de audio mediante HTML5
                      </audio>  
              <?php }else{
                        echo '<span class="col-md-6"> No hay archivo asociado a este track. </span>';
                    } ?>

                    <div class="col-md-3">
                      <?php

                      if(file_exists('assets/audio/'.$track->nombre.'.mp3')) {?>
                            <a class="btn btn-small" href="<?=base_url('assets/audio/'.$track->nombre.'.mp3')?>" 
                                download="<?= $track->nombre.'.mp3'; ?>">
                                <i class="glyphicon glyphicon-download-alt col-md-3" style="font-size:18px;"> Descargar</i>
                            </a>
                      <?php }else {?>
                            <a class="btn btn-small disabled" href="<?=base_url('assets/audio/'.$track->nombre.'.mp3')?>" 
                                download="<?= $track->nombre.'.mp3'; ?>">
                                <i class="glyphicon glyphicon-download-alt col-md-3" style="font-size:18px;"> Descargar</i>
                            </a>
                      <?php } ?>
                    </div>
                    <div class="col-md-3">
                      <?php
                       if($this->session->userdata('logged_in')){
                        echo '<a class="col-md-3" href="/beatmusic/track/like/'.$track->id.'/'.$this->session->userdata['logged_in']['id'].'/'.$track->likes.'" 
                                  data-toggle="tooltip" data-placement="right" title="Me gusta!">
                            <span class="glyphicon glyphicon-heart"><span class="likes">'.$track->likes.'</span></span></a>';
                      }else
                        echo '<a class="col-md-3" href="" data-toggle="tooltip" data-placement="right" title="Logueate para votar!">
                            <span class="glyphicon glyphicon-heart"><span class="likes">'.$track->likes.'</span></span></a>';
                        ?>
                    </div>  
                  </div> 
                  
                </div>
                  <hr>
              <?php } ?>
      <?php  }else{
          echo '<p>'.$row->nombre.' no tiene canciones actualmente.' .'</p>';
          }?>
    </div> 
  </div>     
</div>