<a href="<?= base_url('admin/user_admin_tambah/') ?>" class="btn btn-primary">Tambah  Hak Akses</a>
<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Hak Akses</th>
                  <th>Log Akses</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data->result_array() as $admin): ?>
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['username'] ?></td> 
                 <td><?= $admin['nama'] ?></td>
                 <td><?= ucfirst($admin['level']) ?></td>
                 <td><?= $admin['log'] ?></td>
                 <td><a href="<?= base_url('admin/user_admin_edit/'.$admin['id_admin']) ?>" class="btn btn-info">Edit</a> <a href="<?= base_url('admin/user_admin_hapus/'.$admin['id_admin']) ?>" class="btn btn-danger">Hapus</a></td> 
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
              </table>


 
 
 