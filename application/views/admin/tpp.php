<script type="text/javascript">
   $(function(){
     $("#caliak").click(function(){
                $("#myModal").modal('show');
            })
     })

</script>

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
                  <th>Status Kepegawaian</th>
                  <th>Jumlah TPP</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
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
                 <td><?= $admin['status_kep'] ?></td>
                 <td>Rp .<?= number_format($admin['jumlah_tpp']) ?></td>
                 <td><?= bulan($admin['bulan_t']) ?></td>
                 <td><?= $admin['tahun'] ?></td>
                 <td><a href="<?= base_url('admin/tpp_hapus/'.$admin['id_pegawai']) ?>" onclick="return(confirm('Anda Yakin ?'))" class="btn btn-danger">Hapus</a> <br /><br />
                  
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal<?= $no ?>">
                Detail Informasi TPP
              </button>

<div class="modal fade" id="myModal<?= $no ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 70%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i>Detail Informasi Tambahan Pegawai</h4>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                 Catatan
               <ol> 
                <li>***  Jika Kehadiran Kurang Dari lebih dari Atau Sama Dengan 10 Hari Maka Potongan Tambahan Pendapatan 10%</li>
                <li>***  Jika Kehadiran Kurang Dari lebih dari Atau Sama Dengan 20 Hari Maka Potongan Tambahan Pendapatan 20 %</li>
                <li>***  Jika Kehadiran Kurang Dari lebih dari 25 Hari Maka Potongan Tambahan Pendapatan 25 %</li>
                <li>***  Jika Kehadiran Kurang Dari  10 Hari Maka Potongan Tambahan Pendapatan 50 % </li>
              </ol>
                </div>
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Hadir</th>
                  <th>izin</th>
                  <th>Tidak Hadir</th>
                  <th>Bulan</th>
                  <th>Jumlah Tpp</th>
                  <th>Jumlah Potongan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                 <tbody>
                  
                 <tr>
                 <td><?= $no ?></td>
                 <td><?= $admin['hadir'] ?></td> 
                 <td><?= $admin['izin'] ?></td> 
                 <td><?= $admin['tidak_hadir'] ?></td>
                 <td><?= bulan($admin['bulan_t']) ?></td>
                 <td>Rp .<?= number_format($admin['jumlah_tpp']) ?></td>
                 <td><?= $admin['jumlah_potongan'] ?></td>
                 <td><a href="<?= base_url('admin/tpp_print/'.$admin['id_tpp']) ?>" onclick="return(confirm('Anda Yakin ?'))" class="btn btn-info">Print Data</a> <br /><br />
                 </tr>
             
                 </tbody>
               </table>
                    </div>
                    <div class="modal-footer">
                       
                    </div>
                </div>
            </div>
        </div>




                </td> 
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>



 

 

 
 