<?php
 if($this->session->userdata('level') == "admin" ){

 ?>
<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
<br /><br /><br />
<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>150</h3>

              <p>Data Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p>Data Penggajian Pegawai</p>
            </div>
            <div class="icon">
             <i class="fa fa-cubes"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>150</h3>

              <p>Absensi</p>
            </div>
            <div class="icon">
             <i class="fa fa-cubes"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>


        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>150</h3>

              <p>TPP /Tunjangan Pendapatan</p>
            </div>
            <div class="icon">
             <i class="fa fa-database"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        

 
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            

<?php }elseif($this->session->userdata('level') == "user"){ ?>

<div class="container"><?= $this->session->flashdata('pesan'); ?></div>

<div class="callout callout-success">
                <h4><i class="fa fa-cubes"></i>Selamat Datang </h4>

                <p>Anda Login Sebagai User Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</p>
              </div>


<?php }elseif($this->session->userdata('level') == "pegawai"){ ?>

<div class="container"><?= $this->session->flashdata('pesan'); ?></div>
<div class="callout callout-info">
                <h4><i class="fa fa-cubes"></i>Selamat Datang </h4>
                <p>Anda Login Sebagai Pegawai Silahkan Pilih Menu Di Samping Untuk Menggunakan Sistem</p>
              </div>


<?php } ?>