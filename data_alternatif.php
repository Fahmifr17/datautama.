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
			<!-- <div class=""></div> -->
		</div>
	</div>
	<!-- /page header -->

	<!-- Page container -->
	<div class="page-container container-fluid">
		
		<?php $page='data_alternatif'; include "sidebar.php"; ?>

		<!-- Page content -->
		<div class="page-content">
			
			<!-- Page title -->
			<div class="page-title">
				<h5><i class="fa fa-bars"></i> Halaman Admin</h5>
			</div>
			<!-- /page title -->

			<!-- Hover rows data table inside panel -->
			<div class="panel panel-default">
				<div class="panel-heading"><h6 class="panel-title">DAFTAR ALTERNATIF</h6></div>
				<a href="tambah_alternatif.php"><input type="submit" value="Tambah Alternatif" class="btn btn-info"></a>
				<div class="datatable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								
								<th>Nama Alternatif</th>
								<?php

                                $qkriteria = mysql_query("SELECT * from tbl_kriteria");
                                while ($k = mysql_fetch_array($qkriteria)) {
                                  echo "<th style='text-align:center;'>".$k['nama_kriteria']."</th>";
                                }
                            // <th style='text-align:center;'>C1</th>
                            // <th style='text-align:center;'>C2</th>
                            // <th style='text-align:center;'>C3</th>
                            // <th style='text-align:center;'>C4</th>
                          ?>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php /*
								$sql = "SELECT * FROM tbl_mhs";
								$no = 0;
								foreach ($dbh->query($sql) as $data) :*/
							$nomor=0;
							$tampil = mysql_query("SELECT * FROM tb_alternatif INNER JOIN tb_nilai ON tb_alternatif.id_alternatif = tb_nilai.id_alternatif");
							while ($data = mysql_fetch_array($tampil)) {
								?>
								<tr>
									<td><?php echo $nomor=$nomor+1; ?></td>
									<td><?php echo $data['nama_alternatif']; ?></td>
									<td><?php echo $data['kriteria1']; ?></td>
									<td><?php echo $data['kriteria2']; ?></td>
									<td><?php echo $data['kriteria3']; ?></td>
									<td><?php echo $data['kriteria4']; ?></td>
									<td>
										<a href="edit_alternatif.php?id_alternatif=<?php echo $data['id_alternatif']; ?>">
										<i class='fa fa-edit'></i>
										</a>
										<a href="./alternatif/delete_alternatif.php?id=<?php echo $data['id_alternatif']; ?>">
										<i class="fa fa-eraser"></i>
										</a>
									</td>
								</tr>
							<?php 
							// endforeach;
						}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /hover rows datatable inside panel -->
			<?php include "footer.php"; ?>