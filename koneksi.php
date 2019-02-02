<?php
    $connect=new mysqli('localhost','root','','iot');
    if(!$connect){
      echo "Koneksi gagal";
      exit();
    }
 ?>
