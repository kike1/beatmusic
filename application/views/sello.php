<div class="container" style="margin-top: 70px; padding: 0 70px;">

<?php foreach($this->session->sellov as $row) ?>
  <div class="row">
    <div class="col-md3">
      <h1> <?= $row->nombre ?> </h1>  
    </div>
    
  </div>
  <div class="row">
  <center>
    <div class="col-md-8 artista-img">
      <?php 
      
        $img = base_url('assets/imgs/sellos/'.$row->img.'');
        echo '<img src="'.$img.'" class="img-responsive img-rounded">';
      ?>
    </div>
    </center>

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


</div>