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
			$id_alternatif = $_GET['id_alternatif'];
			$query = mysql_query("SELECT * FROM tb_alternatif p INNER JOIN tb_nilai b ON p.id_alternatif= b.id_alternatif where p.id_alternatif='$id_alternatif'");
			$dataku = mysql_fetch_array($query);
			 ?>
			 <!-- Right labels -->
			 <form class="form-horizontal" action="./alternatif/update_alternatif.php" method="post" role="form">
			 	<div class="panel panel-default">
			 		<div class="panel-heading"><h6 class="panel-title">KRITERIA EDIT</h6></div>
			 		<div class="panel-body">
			 			
			 			
<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Alternatif</label>
							<div class="col-sm-6">
								<input type="hidden" name="id_alternatif" value="<?php echo $dataku['id_alternatif'] ?>">
								<input type="text" name="nama_alternatif" class="form-control" value="<?php echo $dataku['nama_alternatif'] ?>" placeholder="masukkan nama alternatif " required>

							</div>
						</div>

						<?php 

						$kriteria = array();
                                    $kq = mysql_query("SELECT * from tbl_kriteria");
                                    while ($k = mysql_fetch_array($kq)) {
                                    	array_push($kriteria, $k['nama_kriteria']);
                                    }


                                    ?>
                                    <br>

						<div class="form-group">

							<label class="col-sm-2 control-label text-right"><?php echo $kriteria[0] ?></label>
							<div class="col-sm-6">
								<input type="text" name="kriteria1" class="form-control"  placeholder="masukkan nilai " value="<?php echo $dataku['kriteria1'] ?>" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right"><?php echo $kriteria[1] ?></label>
							<div class="col-sm-6">
								<input type="text" name="kriteria2" class="form-control" placeholder="masukkan nilai " value="<?php echo $dataku['kriteria2'] ?>"  required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right"><?php echo $kriteria[2] ?></label>
							<div class="col-sm-6">
								<input type="text" name="kriteria3" class="form-control" placeholder="masukkan nilai " value="<?php echo $dataku['kriteria3'] ?>" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right"><?php echo $kriteria[3] ?></label>
							<div class="col-sm-6">
								<input type="text" name="kriteria4" class="form-control" placeholder="masukkan nilai " value="<?php echo $dataku['kriteria4'] ?>" required>
							</div>
						</div>


						<div class="form-action text-right">
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
						</div>

					</div>
				</div>
			</form>
			
			 <!-- /right labels -->
			 <?php include "footer.php"; ?>