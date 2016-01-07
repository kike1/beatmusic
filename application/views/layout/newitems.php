<div class="row">
  <ul class="new-items-group">
    <?php
    foreach ($allTracks->result() as $row){
      $urlimg = base_url("assets/imgs/tracks/".$row->img."");
       echo '<li class="item col-md-3">';        
          echo '<img src="'.$urlimg.'" class="img-responsive img-thumbnail">';
          echo '<div class="item-info">';
             echo $row->track. '<br>';
             echo '<a href=/beatmusic/escuchar/artista/'.$row->artista.'>'.$row->artista.'</a> <br>';
             echo '<a href=/beatmusic/sello/'.$row->sello.'>'.$row->sello.'</a> <br>';
          echo '</div>
             </li>';
    }
    ?>
  </ul>
</div>