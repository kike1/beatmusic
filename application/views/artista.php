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
                    <audio controls class="col-md-8">
                        <source src="<?=base_url('assets/audio/'.$track->nombre.'.mp3')?>" type="audio/mpeg">
                        Tu navegador no soporta la carga de audio mediante HTML5
                    </audio>  
                  </div> 
                  
                </div>
                  <hr>
              <?php }
            }else{
              echo '<p>'.$row->nombre.' no tiene canciones actualmente.' .'</p>';
              }?>
    </div> 
  </div>     
</div>