<?php 
$soil = $_GET['soil'];
$suhu = $_GET['suhu'];

include "koneksi.php";
$php = mysql_query("INSERT INTO `data`(`id`, `suhu`, `soil`, `date`) VALUES (null, $suhu, '$soil', null)");
if ($php == true){
	echo "succes";
} else {
	echo "failed";
}
?>
