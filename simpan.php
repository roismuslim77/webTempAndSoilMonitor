<?php
include 'koneksi.php';
$soil = $_GET['soil'];
$temp = $_GET['temp'];

$queryResult = $connect->query("INSERT INTO data (id, soil, suhu, date, produk) values (null,'$soil','$temp',null,'a')");
if($queryResult===false) echo $connect->error;
?>
