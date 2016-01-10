<table class="table table-hover">
<caption></caption>
    <thead>
      <tr>
      <th>NOMBRE</th>
      <th>FECHA (AAAA-MM-DD)</th>
      <th>DURACION</th>
      <th>LUGAR</th>
      </tr>
    </thead>
<?php
    foreach ($getevento->result() as $row){?>
    
    <tbody>
      <tr>
    		<td><?= $row->nombre?></td>
    	  <td><?= $row->fecha?></td>
        <td><?= $row->duracion; print " dia/s";?></td>
        <td><?= $row->lugar?></td>
        <?php 
    		}
  			?>
      </tr>
    </tbody>
</table>