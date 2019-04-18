<table class="table table-striped">
<form action="" method="POST"> 

	<tr><th>Nip</th><td><input type="text" name="nip" value="<?= $nip ?>" class="form-control" required=''></td></tr>
	<tr><th>Nama</th><td><input type="text" name="nama" value="<?= $nama ?>" class="form-control" required=''></td></tr>
	<tr><th>Jenis Kelamin</th><td><select name="jk" class="form-control" required="">
		                          <option value="L">Laki- Laki</option>
		                          <option value="P">Perempuan</option>
	</select></td></tr>
	<tr><th>Foto</th><td>
   <?php
      if($aksi == "edit"){
         echo '<img src="'.base_url(''.$foto).'" class="img-responsive" style="width:130px;height:130px">';
      }else{

      }

    ?>
	<input type="text" name="foto" value="<?= $nip ?>" class="form-control" required=''></td></tr>
	<tr><th>Pendidikan</th><td><input type="text" name="agama" value="<?= $nip ?>" class="form-control" required=''></td></tr>
	<tr><th>Alamat</th><td><input type="text" name="pendidikan" value="<?= $nip ?>" class="form-control" required=''></td></tr>
	<tr><th>Username</th><td><input type="text" name="username" value="<?= $nip ?>" class="form-control" required=''></td></tr>
    <tr><th>Password</th><td><input type="text" name="password" value="<?= $nip ?>" class="form-control" required=''></td></tr>
    <tr><td></td><td><input type="submit" name="kirim" class="btn bnt-primary" value="Submit">&nbsp;&nbsp;&nbsp;
                     <input type="reset" name="" value="Batal" class="btn btn-danger"></td></tr>
</form>

</table> 