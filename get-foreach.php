<?php
  $data = $_GET;
  var_dump($data);

  //$_GET['nome'];
  
  foreach ($data as $k => $value) {
    echo $k .': '. $value . ' ';
  }