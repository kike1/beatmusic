<div class="list-group">
  <a href="#" class="list-group-item active">
    TOP 10
  </a>

  <?php
    $i=0;
    foreach ($topten->result() as $row){
        echo '<a href="/cancion/'.$row->track.'" class="list-group-item">'. ++$i.'. '.$row->artista. ' - ' .$row->track.'</a>';
    }
  ?>
  
</div>