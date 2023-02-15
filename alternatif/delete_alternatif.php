<?php 
include '../inc/koneksi.php';
	
$id_alternatif = (int) $_GET['id'];
if($id_alternatif){
    //delete data alternatif terlebih dahulu
    mysql_query("delete from tb_alternatif where id_alternatif='{$id_alternatif}'");
    //delte data nilai
    mysql_query("delete from tb_nilai where id_alternatif='{$id_alternatif}'");
}

header("location:../data_alternatif.php");
?>