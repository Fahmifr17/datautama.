<?php 
 
include '../inc/koneksi.php';

	
$sql = "insert into tb_alternatif (nama_alternatif) values ('{$_POST['nama_alternatif']}')";
mysql_query($sql) ;
//mencari id alternatif
$sql2 = "select max(id_alternatif) as id_alternatif from tb_alternatif limit 1";
$row = mysql_fetch_array(mysql_query($sql2));
$id_alternatif = $row['id_alternatif'];


//menyimpan data ke tabel nilai

$sql3 = "insert into tb_nilai(id_alternatif, kriteria1,kriteria2,kriteria3,kriteria4) values ('{$id_alternatif}','{$_POST['kriteria1']}','{$_POST['kriteria2']}','{$_POST['kriteria3']}','{$_POST['kriteria4']}')";
mysql_query($sql3);
header("location:../data_alternatif.php");
 
?>