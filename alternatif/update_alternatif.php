<?php 
 
include '../inc/koneksi.php';
if($_POST){// jika tombol update ditekan
    //update data di tabel product
    $sql = "update tb_alternatif set nama_alternatif='{$_POST['nama_alternatif']}' 
    where id_alternatif='{$_POST['id_alternatif']}'";
    mysql_query($sql);
    //update data di tabel buku
    $sql2 = "update tb_nilai set kriteria1='{$_POST['kriteria1']}',kriteria2='{$_POST['kriteria2']}',
    kriteria3='{$_POST['kriteria3']}',kriteria4='{$_POST['kriteria4']}' where id_alternatif='{$_POST['id_alternatif']}'";
    mysql_query($sql2);
    echo "Data telah di edit";
}

header("location:../data_alternatif.php");
 
?>