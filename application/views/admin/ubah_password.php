<?=  $this->session->flashdata('pesan') ?>
<table class="table table-sriped">
	<form action="" method="POST">
 	<tr><td>Usernme</td><td><input type="text" name="" value="<?= $data['username'] ?>" class="form-control"></td></tr>
	<tr><td>Nama</td><td><input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control"></td></tr>
	<tr><td>Password</td><td><input type="password" name="password" value="" class="form-control"></td></tr>
    <tr><td>Level Akses</td><td><input type="text" name="" value="<?= $data['level'] ?>" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" name="kirim" value="Submit" class="btn btn-primary"></td></tr>		
    </form>
</table>