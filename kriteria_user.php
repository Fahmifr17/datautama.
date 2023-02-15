
<?php $page='kriteria'; include './template_user/header.php';
include "config/library.php";
include 'inc/librari.php';
include "config/fungsi_indotgl.php";
?>
<?php 
error_reporting(E_ALL ^ E_DEPRECATED); 
$koneksi = mysql_connect('localhost','root','','spk_ahp_master');
mysql_select_db('spk_ahp_master');
?>
<h5><span class="fas fa-table"></span> Data Kriteria</h5><hr>
<table class="table table-striped table-bordered table-sm">
    <tr class="text-center">
        <th>No</th><th>Nama Kriteria</th><th>Atribut</th><th>Pengaturan</th>
    </tr>

                            <?php 
                            /*$sql = "SELECT * FROM tbl_kriteria";
                            $nomor = 0;
                            foreach ($dbh->query($sql) as $data) :
                            */ 
                            $nomor=0;
                            $tampil = mysql_query("SELECT * FROM tbl_kriteria");
                            while ($data = mysql_fetch_array($tampil)) {
                                ?>
                                <tr>
                                    <td><?php echo $nomor=$nomor+1; ?></td>
                                    <td><?php echo $data['kd_kriteria']; ?></td>
                                    <td><?php echo $data['nama_kriteria']; ?></td>
                                    <td><?php echo $data['atribute']; ?></td>
                                    
                                        
                                        
                                    </td>
                                </tr>
                            <?php 
                            /*endforeach;*/
                        }
                             ?>
                        </tbody>
                    </table>


					<?php include './template_user/footer.php';?>