<?php 
include 'inc/koneksi.php';

$id_kriteria = $_GET['id_kriteria'];
$id_kriteria = $_GET['kriteria1'];
$id_kriteria = $_GET['nm_banding'];
$id_kriteria = $_GET['kriteria2'];
$query = mysql_query("UPDATE perbandingan_kriteria SET  kriteria1='$kriteria1', nm_banding='$nm_banding', kriteria2='$kriteria2' WHERE id_kriteria='$id_kriteria'") or die(mysql_error());
if ($query) {
	?>
	<script language="JavaScript">
	alert('Data Kriteria Berhasil dihapus');
	document.location = 'analisa_kriteria.php';
	</script>
	<?php
}
?>