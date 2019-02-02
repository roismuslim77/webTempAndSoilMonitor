<html>
<head> <title>-----</title>
<style type="text/css">
 #box1{
	width:100%;
	height:40px;
	background:#cec8c8;
	border-radius:10px;
	}
 #box2{
	height:40px;
	border-radius:10px;
	}
 #box3{
	 height:40px;
	 width:100px;
	 border-radius:10px;
 }
#footer{
    height:50px;
    line-height:50px;
    color:black;
 
    position:absolute;
    bottom:0px;
}
</style>
</head>
<body>
<div align="center" style="padding-top:5px"><h2>Monitoring Kelembaban Tanah</h2></div>
<div><br>
<?php
include "koneksi.php";
$kelembaban =0;
$suhu =0;
$date =0;
 $sql = mysql_query("select * from data");
 while ($ada = mysql_fetch_array($sql)){
	$kelembaban = $ada["soil"];
	$suhu = $ada["suhu"];
	$date = $ada["date"];	
 }
?>
<div id="box1">
<div id="box2" style="width:<?php echo $kelembaban; ?>%; background:#53f939">
</div>
</div>
<br>
<div id="box1">
<div id="box2" style="width:<?php echo $suhu; ?>%; background:blue"><div align="left" style="padding-top:10px;padding-left:7px;color:white"> Suhu Udara - <?php echo $suhu; ?></div>
</div>
</div>
</div>
<div id="footer">Update Time : <?php $data=substr($date,0,19); echo $data; ?></div>
</body>
</html>
