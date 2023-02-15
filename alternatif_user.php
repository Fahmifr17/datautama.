
<?php $page='alternatif_user'; include './template_user/header.php';
include "config/library.php";
include 'inc/librari.php';

include "config/fungsi_indotgl.php";
?>
<?php 
error_reporting(E_ALL ^ E_DEPRECATED); 
$koneksi = mysql_connect('localhost','root','','spk_ahp_master');
mysql_select_db('spk_ahp_master');
?>
<h5><span class="fas fa-table"></span> Data Alternatif</h5><hr>
<table class="table table-striped table-bordered table-sm">
    <tr class="text-center">
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
									
								</tr>
							<?php 
							// endforeach;
						}
							?>
						</tbody>
					</table>

					<?php include './template_user/footer.php';?>