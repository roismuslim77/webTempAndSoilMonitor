<?php
// Parameter untuk database MySQL
$host = "localhost";
$user = "id6422378_tugas";
$pass = "tsani888";
$name  = "id6422378_tugasta";
$table= "data";

// Buat koneksi ke database MySQL
$conn = new mysqli($host, $user, $pass, $name);
 
// Periksa apakah koneksi sudah berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

//$save = "INSERT INTO `ofHour` SELECT * FROM `data` WHERE `data`.`id` < 3";
$load = "SELECT * FROM `data` WHERE `key` = 'suhu'";
$hapus = "TRUNCATE `data`";
$hasil = $conn->query($load); 
if (mysqli_num_rows($hasil)>0){
    while ($data = mysqli_fetch_array($hasil)){
        $suhu = $data["content"];
        $sql2 = "SELECT * FROM `data` WHERE `key` = 'soil'";
        $query2 = mysqli_query($conn,$sql2);
        while ($data2 = mysqli_fetch_array($query2)){
            $soil = $data2["content"];
        }
    }
}
$input = "INSERT INTO `ofHour` (`id`, `key`, `created_at`, `content`) VALUES (NULL,'suhu',CURRENT_TIMESTAMP,'$suhu'),(NULL,'soil',date('Y-m-d'),'$soil')";
$hasil2 = $conn->query($hapus);
$hinput = $conn->query($input);
if (($hasil2 && $hinput) === TRUE) {
    echo "Sukses..";
} else {
    echo "Error: ". $conn->error;
}
?>