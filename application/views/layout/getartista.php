<div class="row">
  <ul class="new-items-group">
<?php
    foreach ($getartista->result() as $row){
    	$urlimg = base_url("assets/imgs/artistas/".$row->img."");?>
    	<li class="item col-md-3">
			<img src="<?= $urlimg ?>" class="img-responsive img-thumbnail">
			<div class="item-info">
    		<?php    echo '<a href=/beatmusic/escuchar/artista/'.$row->nombre.'>'.$row->nombre.'</a> <br>';
    		echo '</div>
    	</li>';
    		}
  			?>
	</ul>
</div>
