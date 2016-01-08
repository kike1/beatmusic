<div class="list-group">
  <a class="list-group-item active">
    TOP 10
  </a>

  <?php
    $i=0;
    foreach ($topten->result() as $row){
        
        echo '<div class="list-group-item">';
            echo '<div class="row">';
                echo '<div class="top-ten-num col-md-3">'.++$i.'</div>';
                echo '<div class="top-ten-track-meta col-md-9">';
                    echo '<div class="top-ten-track-title">'.$row->track.'</div>';
                    echo '<a href=/beatmusic/escuchar/artista/'.$row->artista.' class="top-ten-track-artist">'.$row->artista.'</a> <br>';
                    echo '<a href=/beatmusic/sello/'.$row->sello.'>'.$row->sello.'</a> <br>';
                echo '</div>';
                //echo '<a href="/cancion/'.$row->track.'">'. ++$i.'. '.$row->artista. ' - ' .$row->track.'</a>';
            echo '</div>';
        echo '</div>';
    }
  ?>
  
</div>