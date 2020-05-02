<table class="table table-striped">
<form action="" method="POST" enctype="multipart/form-data"> 

	<tr><th>Nip</th><td><input type="text" name="nip" value="<?= $nip ?>" class="form-control" required=''></td></tr>
	<tr><th>Nama</th><td><input type="text" name="nama" value="<?= $nama ?>" class="form-control" required=''></td></tr>
	<tr><th>Foto</th><td>
   <?php
      if($aksi == "edit"){
         echo '<img src="'.base_url('/template/data/'.$foto).'" class="img-responsive" style="width:130px;height:130px">';
      }else{

      }

    ?>
	<input type="file" name="foto" class="form-control"></td></tr>
	<tr><th>Alamat</th><td><input type="text" name="alamat" value="<?= $alamat ?>" class="form-control" required=''></td></tr>
	<tr><th>Agama</th><td><input type="text" name="agama" value="<?= $agama ?>" class="form-control" required=''></td></tr>
	<tr><th>Pendidikan</th><td><input type="text" name="pendidikan" value="<?= $pendidikan ?>" class="form-control" required=''></td></tr>
	<tr><th>Username</th><td><input type="text" name="username" value="<?= $username ?>" class="form-control" required=''></td></tr>
    <tr><th>Password</th><td><input type="password" name="password" class="form-control"><br><b>*Diisi jika ingin ganti password</b></td></tr>
    <tr><td></td><td><input type="submit" name="kirim" class="btn bnt-primary" value="Submit">&nbsp;&nbsp;&nbsp;
                     <input type="reset" name="" value="Batal" class="btn btn-danger"></td></tr>
</form>

</table> 