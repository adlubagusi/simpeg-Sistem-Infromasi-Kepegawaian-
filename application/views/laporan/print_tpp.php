<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?= base_url("template/admin/bower_components/bootstrap/dist/css/bootstrap.min.css") ?>">
	<title>Data TPP</title>
</head>
<script type="text/javascript">window.print()</script>
<body>
	<div class="container">
		<div class="row">
<h1>Data Hasil Print Out Tambahan Pendapatan Pegawai</h1>
<hr /> 


 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Nama Jabatan</th>
                  <th>Status Kepegawaian</th>
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data as $admin): ?>
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['nip'] ?></td> 
                 <td><?= $admin['nama'] ?></td> 
                 <td><?php if($admin['jk'] == "L"){ echo "Laki-Laki";}else{ echo "Perempuan";} ?></td>
                 <td><?= $admin['agama'] ?></td>
                 <td><?= $admin['nama_jabatan'] ?></td>
                 <td><?= $admin['status_kep'] ?></td>
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>



<table class="table table-striped">

<tr><td><img src="<?= base_url('template/data/'.$data[0]['foto']) ?>" class="img-responsive" style="width: 200px;height: 200px"></td></tr>	
<tr><td>Jumlah Hadir </td><td><?= $data[0]['hadir'] ?></td></tr>
<tr><td>Jumlah Izin </td><td><?= $data[0]['izin'] ?></td> </tr>
<tr><td>Jumlah Tidak Hadir </td><td><?= $data[0]['tidak_hadir'] ?></td></tr>
<tr><td>Kehadiran Bulan Pada</td><td><?= bulan($data[0]['bulan_t']) ?></td></tr>
<tr><td>Tahun </td><td><?= ($data[0]['tahun']) ?></td></tr>
<tr><td>Jumlah TPP</td><td>Rp .<?= number_format($data[0]['jumlah_tpp']) ?></td></tr>
<tr><td>Jumlah TPP Bersih </td><td>Rp .<?= number_format($data[0]['tunjangan']) ?></td></tr>
<tr><td>Jumlah Potongan</td><td><?= $data[0]['jumlah_potongan'] ?></td></tr>
</table>
</div>
</div>

</body>
</html>