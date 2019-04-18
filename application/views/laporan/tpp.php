<?php if($depan == TRUE): ?>
<table class="table table-striped">
  <form action="" method="POST">
   <tr><th>Dari</th><td><input type="date" name="dari" class="form-control" required=""></td></tr>
   <tr><th>Sampai</th><td><input type="date" name="sampai" class="form-control" required=""></td></tr>
   <tr><th></th><td><input type="submit" name="cari" class="btn btn-primary"></td></tr>
</form>
</table>

<?php elseif($depan == FALSE): ?>

<?php if($cetak == TRUE ): ?>

<a href="<?= base_url('laporan/laporan_tpp_cetak/'.$this->input->post('dari').'/'.$this->input->post('sampai')) ?>" class="btn btn-primary">Cetak TPP</a>
<?php elseif($cetak == FALSE): ?>
<script type="text/javascript">window.print()</script>
<link rel="stylesheet" href="<?= base_url('/template/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
<center>
  <h2><?= ucfirst($judul) ?></h2>
   <hr />
<span color="red"><i>Dicetak Pada Dari <?= tgl_indonesia(date("Y-m-d")) ?></i></span>
</center>

<?php endif; ?>


<br /><br /><br />
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
                
                  <th>Jumlah Tunjangan</th>
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
                  
                 <td>Rp .<?= number_format($admin['jumlah_tpp']) ?></td>
                 <td><?= $admin['status_kep'] ?></td>
                 <td><?= $admin['alamat'] ?></td>
                 
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>


<?php endif; ?>