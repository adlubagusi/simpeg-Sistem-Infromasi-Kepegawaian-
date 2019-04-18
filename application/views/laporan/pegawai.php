<?php if($print == TRUE):
$nilai="
<script>window.print()</script>
<link rel=\"stylesheet\" href=\"".base_url('/template/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')."\">
<h2>Laporan Data Pegawai </h2><hr />";
elseif($print == FALSE):
$nilai='<a href="'.base_url('laporan/laporan_pegawai_print').'" class="btn btn-primary"><i class="fa fa-print"></i>Print Laporan</a>
<br /><br /><br />';
endif;
echo $nilai;

?>  
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Foto</th>
                  <th>Nama Jabatan</th>
                  <th>Pendidikan</th>
                  <th>Status Kepegawaian</th>
                  <th>Alamat Lengkap</th>
                  
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data->result_array() as $admin): ?>
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['nip'] ?></td> 
                 <td><?= $admin['nama'] ?></td> 
                 <td><?php if($admin['jk'] == "L"){ echo "Laki-Laki";}else{ echo "Perempuan";} ?></td>
                 <td><?= $admin['agama'] ?></td>
                 <td><img src="<?= base_url('template/data/'.$admin['foto']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
                 <td><?= $admin['nama_jabatan'] ?></td>
                 <td><?= $admin['pendidikan'] ?></td>
                 <td><?= $admin['status_kep'] ?></td>
                 <td><?= $admin['alamat'] ?></td>
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>
 
 