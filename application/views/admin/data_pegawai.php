<form action="<?= base_url('admin/aksi_abs') ?>" method="POST"> 
<table class="table table-striped">
	<thead>
		<th></th>
	</thead>
	<?php foreach($pegawai->result_array() as $peg); 
       if($peg['jk'] == "L"){
        $jk="Laki -Laki";
       }elseif($peg['jk'] == "P"){
        $jk="Perempuan";
       }else{
       	 $jk="Tidak Di Kenali";
       }

	 ?>
	<tr><td>Nip</td><th><input type="text" value="<?= $peg['nip'] ?>" class="form-control" disabled></th></tr> 
  <input type="hidden" name="id_pegawai" value="<?= $peg['id_pegawai'] ?>">
	<tr><td>Nama Pegawai</td><th><input type="text" value="<?= $peg['nama'] ?>" name="id_pegawai" class="form-control" value="<?= $peg['id_pegawai'] ?>" disabled></th></tr>
   	<tr><td>Jenis Kelamin</td><th><input type="text" value="<?= $jk ?>" class="form-control" disabled></th></tr>
    <tr><td>Foto</td><td><img src="<?= base_url('template/data/'.$peg['foto']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td></tr>
    <tr><td>Status Kepegawaian</td><td><input type="text" value="<?= $peg['status_kep'] ?>" class="form-control" disabled></td></tr>
    <tr><td>Bulan </td><td>
       <select name="bulan" required="" class="form-control">
       <option value="1">Januari</option>
       <option value="3">February</option>
       <option value="4">Maret</option>
       <option value="5">April</option>
       <option value="6">Mei</option>
       <option value="7">Juni</option>
       <option value="8">Juli</option>
       <option value="9">Agustus</option>
       <option value="10">September</option>
       <option value="11">November</option>
       <option value="12">Desember</option>
       <select>
    </td><td><b>Terhitung Data Kehadiran Pada <?= tgl_indonesia(date("Y-m-d")) ?></b></td></tr>

    <tr><td>Status Presensi Hadir</td><td>
       <input type="number" name="hadir" class="form-control">
    </td><td><b>** Isikan angka misal 10 </b></td></tr>

    <tr><td>Status Presensi Izin</td><td>
       <input type="number" name="izin" class="form-control">
    </td><td><b>** Isikan angka misal 10 </b></td></tr>

    <tr><td>Status Presensi Tidak Hadir</td><td>
       <input type="number" name="tidak_hadir" class="form-control">
    </td><td><b>** Isikan angka misal 10 </b></td></tr>

 
    <tr><td></td><td><input type="submit" name="kirim_data" value="Isi Absen" class="btn btn-info">&nbsp;<input type="reset" name="batal" value="Batal Isi Absen" class="btn btn-danger"></td></tr>
</table>
 </form>