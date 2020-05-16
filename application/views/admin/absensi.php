<script>   
     $(function(){
     $(".cari").click(function(){
                $("#myModal").modal('show');
            })

		    $(".cari_p").click(function(){
		    var cari_p=$(this).val();
	         $.ajax({
                url:"<?php echo base_url('admin/cari_pegawai');?>",
                type:"POST",
                data:"cari_p="+cari_p,
                cache:false,
                success:function(html){
                    $("#tampilcie").html(html);
                    $("#myModal").modal('hide');
                }
            })
         })
	})

    </script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 70%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Data Pegawai</h4>
                    </div>
                    <div class="modal-body">
                
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nip</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Foto</th>
                  <th>Nama Jabatan</th>
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
                 <td><img src="<?= base_url('template/data/'.$admin['foto']) ?>" class="img-responsive" style="width: 100px;height: 100xp"></td>
                 <td><?= $admin['nama_jabatan'] ?></td>
                 <td><?= $admin['status_kep'] ?></td>
                 <td><?= $admin['alamat'] ?></td>
                 <th>
                    <label>
                      <input name="cari_p" class="cari_p" type="radio" value="<?= $admin['id_pegawai'] ?>">Pilih
                    </label>
                 </th>
                 </tr>
                 <?php $no++; endforeach; ?>
                 </tbody>
               </table>
               
 
                    </div>
                    <div class="modal-footer">
                       
                    </div>
                </div>
            </div>
        </div>


<table class="table table-resposive">
<tr><th>Cari Pegawai</th><td><input type="text" class="cari form-control" placeholder="Cari Pegawai ...."></td></td></tr>
</table>
<div id="tampilcie"></div>

 