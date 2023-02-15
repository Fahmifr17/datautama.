<?php 
include "head.php";
?>
<body>
	<!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                

                <ul class="nav navbar-nav navbar-left-custom">
                    <li class="user dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">                           
                            <span>Sistem Penunjang Keputusan AHP</span>                            
                        </a>
                    </li>
                    <li><a class="nav-icon sidebar-toggle"><i class="fa fa-bars"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- /navbar -->

	<!-- Page header -->
	<div class="container-fluid">
		<div class="page-header">
			<!-- <div class="logo"><a href="index.php" title=""><img src=""></a></div> -->
		</div>
	</div>
	<!-- /page header -->

	<!-- Page container -->
	<div class="page-container container-fluid">
		
		<?php include "sidebar.php"; ?>

		<!-- Page content -->
		<div class="page-content">
			
			<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-bars"></i> Halaman Admin</h5>
			</div>
			<!-- /page title -->

			<?php 
			$id_kriteria = $_GET['id_kriteria'];
			$query = mysql_query("SELECT * FROM tbl_kriteria WHERE id_kriteria='$id_kriteria'");
			$dataku = mysql_fetch_array($query);
			 ?>
			 <!-- Right labels -->
			 <form class="form-horizontal" action="kriteria_edit.php" method="post" role="form">
			 	<div class="panel panel-default">
			 		<div class="panel-heading"><h6 class="panel-title">KRITERIA EDIT</h6></div>
			 		<div class="panel-body">
			 			
			 			
			 			<div class="form-group">
			 				<label class="col-sm-2 control-label text-right">KODE KRITERIA:</label>
			 				<div class="col-sm-10">
			 					<input type="hidden" name="id_kriteria" value="<?php echo $dataku['id_kriteria'] ?>">
			 					<input type="text" name="kd_kriteria" value="<?php echo $dataku['kd_kriteria']; ?>" required class="form-control">
			 				</div>
			 			</div>

			 			<div class="form-group">
			 				<label class="col-sm-2 control-label text-right">NAMA KRITERIA</label>
			 				<div class="col-sm-10">
			 					<input type="text" name="nama_kriteria" value="<?php echo $dataku['nama_kriteria']; ?>" required class="form-control">
			 				</div>
			 			</div>

			 			<div class="form-group">

			 				<label class="col-sm-2 control-label text-right">ATRIBUT</label>
			 				<div class="col-sm-10">
			 			<select name="atribute" placeholder="Pilih Kriteria..." class="form-control">
                                    <option value="">Pilih Alternatif</option>
                               <?php
                                    $query = "SELECT * FROM tbl_kriteria ORDER BY id_kriteria asc";
                                    $hasil = mysql_query($query);
                                    while ($data = mysql_fetch_array($hasil)){
                                        if ($dataku['id_kriteria']==$data['id_kriteria']){
                                           echo "<option value='$data[atribute]' selected='$dataku[id_kriteria]'>".$data['atribute']."</option>"; 
                                        }else{
                                            echo "<option value='$data[atribute]'>".$data['atribute']."</option>";
                                        }
                                        
                                    }
                                    ?>
                                </select>
			 				</div>
			 			</div>

			 			<div class="form-action text-right">
			 				<input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
			 				<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
			 			</div>

			 		</div>
			 	</div>
			 </form>
			 <?php 
			 if (isset($_POST['ubah'])) {
			 	$id_kriteria = $_POST['id_kriteria'];
			 	$kd_kriteria 			= $_POST['kd_kriteria'];
			 	$nama_kriteria 		= $_POST['nama_kriteria'];
			 	$atribute 		= $_POST['atribute'];

			 	$query = mysql_query("UPDATE tbl_kriteria SET kd_kriteria='$kd_kriteria', nama_kriteria='$nama_kriteria',atribute='$atribute' WHERE id_kriteria='$id_kriteria'") or die(mysql_error());
			 	if ($query) {
			 		echo "<script>window.alert('Data Kriteria berhasil diubah');
			 					window.location=(href='kriteria.php')</script>";
			 	}}
			 ?>
			 <!-- /right labels -->
			 <?php include "footer.php"; ?>