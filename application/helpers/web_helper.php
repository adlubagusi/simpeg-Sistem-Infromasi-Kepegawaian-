<?php 
function barasiah($nilai='')
{
  $db = get_instance()->db->conn_id;
	return mysqli_real_escape_string($db,addslashes($nilai));
}

  function tpl($konten,$array)
  {

    $CI =& get_instance();
    $CI->load->view('template/header',$array);
    $CI->load->view($konten);
    $CI->load->view('template/footer');
  }



function buat_alert($pesan){
  echo'<script type="text/javascript">alert("'.$pesan.'");window.location.href="javascript:history.back()"; </script>'; 
  }



function tgl_indonesia($tgl){
  $nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    
  $tanggal = substr($tgl,8,2);
  $bulan = $nama_bulan[(int)substr($tgl,5,2)];
  $tahun = substr($tgl,0,4);
  
  return $tanggal.' '.$bulan.' '.$tahun;     
}


function bulan($data='')
{
  if ($data == 1) {
    $bulan="Januari";
  }elseif($data == 2){
    $bulan="Februari";
  }elseif($data == 3){
    $bulan="Maret";
  }elseif($data == 4){
    $bulan="April";
  }elseif($data == 5){
    $bulan="Mei";
  }elseif($data == 6){
    $bulan="Juni";
  }elseif($data == 7){
    $bulan="Juli";
  }elseif($data == 8){
    $bulan="Agustus"; 
  }elseif($data == 9){
    $bulan="September"; 
  }elseif($data == 10){
    $bulan="November";
  }elseif($data == 12){
    $bulan="Desember";
  } 
  return $bulan;
}