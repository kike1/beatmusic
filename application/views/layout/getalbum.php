<?php
    $i=0;
    foreach ($getalbum->result() as $row){
    echo ++$i.'. '.$row->nombre. '<br>';
    }
  ?>