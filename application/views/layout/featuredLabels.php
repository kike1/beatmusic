<div class="row">
  <ul class="new-items-group">
    <?php
    foreach ($labels->result() as $row){
      $urlimg = base_url("assets/imgs/sellos/".$row->imgsello."");
       echo '<li class="label-item col-md-3">';        
          echo '<a class="col-md-12 featured-label-info" href=/beatmusic/sello/'.urlencode($row->nombre).'>'.
              '<img src="'.$urlimg.'" class="img-responsive img-rounded featured-label-img">'.$row->nombre.'</a>';
        echo '</li>';
    }
    ?>
  </ul>
</div>