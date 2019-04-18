<a href="<?= base_url('admin/gaji_tambah/') ?>" class="btn btn-primary">Set Gaji</a>
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
                  <th>Jumlah Gaji</th>
                  <th>Status Kepegawaian</th>
                  <th>Alamat Lengkap</th>
                  <th>Aksi</th>
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
                 <td>Rp .<?= number_format($admin['jumlah']) ?></td>
                 <td><?= $admin['status_kep'] ?></td>
                 <td><?= $admin['alamat'] ?></td>
                 <td><a href="<?= base_url('admin/gaji_hapus/'.$admin['id_gaji']) ?>" onclick="return(confirm('Anda Yakin ?'))" class="btn btn-danger">Hapus</a></td> 
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>

 
 