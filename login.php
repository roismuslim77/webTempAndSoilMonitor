<?php
include "koneksi.php";
$nama = $_GET['nama'];
$pass = $_GET['pass'];
session_start();

$sql = "SELECT * FROM `member` WHERE `username`= '$nama' && `pass`='$pass'";
$log = mysql_query($sql);
$data = mysql_num_rows($log);
if ($data == 1){
    $id = mysql_query($sql);
    while ($d = mysql_fetch_array($id)){
       $id_produk = $d['produk']; 
    };
    echo $id_produk;
} else {
    echo "loginfail";
}
?>