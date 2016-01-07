<?php
    $i=0;
    foreach ($getartista->result() as $row){
    	$urlimg = base_url("assets/imgs/artistas/".$row->img."");?>
<img width="100" height="100" src="<?= $urlimg ?>" class="img-responsive">
<p>
    <?php    echo ++$i.'. '.$row->nombre. ' - ' .$row->descripcion.'<br>';
    }
  ?>
</p>