<a href="<?= base_url('admin/jabatan_tambah/') ?>" class="btn btn-primary">Tambah</a>
<br /><br /><br />
<?= $this->session->flashdata('pesan') ?>
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Jabatan</th>
                  <th>Golongan</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <tbody>
                 <?php $no=1; foreach($data as $admin): ?>
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['nama_jabatan'] ?></td> 
                 <td><?= $admin['golongan'] ?></td>
                 <td>Rp.<?= number_format($admin['tunjangan']) ?></td>
                 <td><a href="<?= base_url('admin/jabatan_edit/'.$admin['id_jabatan']) ?>" class="btn btn-info">Edit</a> <a href="<?= base_url('admin/jabatan_hapus/'.$admin['id_jabatan']) ?>" class="btn btn-danger">Hapus</a></td> 
                 </tr>

                 <?php $no++; endforeach; ?>
                 
                 </tbody>
              </table>


 
 
 