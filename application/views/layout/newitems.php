<div class="row">
  <ul class="new-items-group">
    <?php
    foreach ($allTracks->result() as $row){
      $urlimg = base_url("assets/imgs/tracks/".$row->img."");
       echo '<li class="item col-md-3">';        
          echo '<img src="'.$urlimg.'" class="img-responsive img-thumbnail">';
            
          echo '<div class="row">';
            echo '<div class="item-info col-md-12">';
              
               echo '<span class="col-md-9">'.$row->track. '</span>';

               if($this->session->userdata('logged_in')){
                echo '<a class="col-md-3" href="/beatmusic/track/like/'.$row->id.'/'.$this->session->userdata['logged_in']['id'].'/'.$row->likes.'" 
                          data-toggle="tooltip" data-placement="left" title="Me gusta!">
                    <span class="glyphicon glyphicon-heart"><span class="likes">'.$row->likes.'</span></span></a>';
              }else
                echo '<a class="col-md-3" href="" data-toggle="tooltip" data-placement="left" title="Logueate para votar!">
                    <span class="glyphicon glyphicon-heart"><span class="likes">'.$row->likes.'</span></span></a>';

               echo '<a class="col-md-12" href=/beatmusic/escuchar/artista/'.urlencode($row->artista).'>'.$row->artista.'</a> <br>';
               echo '<a class="col-md-12" href=/beatmusic/sello/sello/'.urlencode($row->sello).'>'.$row->sello.'</a> <br>';
            echo '</div>';
          echo '</div>';
        echo '</li>';
    }
    ?>
  </ul>
</div>