<div class="row">
  <ul class="new-items-group">
<?php
    foreach ($getalbum->result() as $row){?>
    	<li class="item col-md-3">
			<div class="item-info">
    		<?php    echo $row->nombre.'<br>';
    		echo '</div>
    	</li>';
    		}
  			?>
	</ul>
</div>