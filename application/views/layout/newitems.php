<div class="row">
  <ul class="new-items-group">
    <?php
    foreach ($allTracks->result() as $row){
       echo '<li class="item col-md-3">';
        $urlimg = base_url("assets/imgs/tracks/".$row->img."");
        //echo $urlimg;
          echo '<img src="'.$urlimg.'" class="img-responsive img-thumbnail">';
          echo '<div class="item-info">';
             echo $row->track. '<br>';
             echo '<a href=/artista/'.$row->artista.'>'.$row->artista.'</a> <br>';
             echo '<a href=/album/'.$row->album.'>'.$row->album.'</a> <br>';
          echo '</div>
             </li>';
    }
    ?>
  </ul>

</div>