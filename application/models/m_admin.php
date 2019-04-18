<?php 

/**
* 
*/
class M_admin extends CI_model
{
	
public function pegawai($value='')
{
 return $this->db->query("SELECT * from pegawai a, jabatan b where a.id_jabatan=b.id_jabatan group by a.id_pegawai");
}

public function count_data($table){
  return $this->db->query("SELECT COUNT(*) AS jml_data FROM $table");
}

public function cek_absen($id_pegawai='',$tanggal='')
{
 return $this->db->query("SELECT * from absen where id_pegawai='$id_pegawai' AND tanggal='$tanggal'");
}

public function gaji_pegawai()
{
 return $this->db->query("SELECT * from pegawai a, jabatan b ,gaji d where a.id_jabatan=b.id_jabatan AND d.id_pegawai=a.id_pegawai group by d.id_pegawai");
}

public function cari_pegawai($cari)
{
 return $this->db->query("SELECT * from pegawai a ,jabatan b where a.id_jabatan=b.id_jabatan AND a.id_pegawai='$cari'");
}

public function pegawai_data()
{
 return $this->db->query("SELECT * from pegawai a ,jabatan b  where a.id_jabatan=b.id_jabatan group by a.id_pegawai");
}



public function tpp_id($id='')
{
  return $this->db->query("SELECT * from pegawai a,jabatan b ,tpp c , absen d where c.id_pegawai='$id' AND a.id_jabatan=b.id_jabatan 
    AND d.id_pegawai=a.id_pegawai
    AND c.id_pegawai=a.id_pegawai
    group by c.id_tpp");
}

public function tpp()
{
  return $this->db->query("SELECT * from pegawai a,jabatan b ,tpp c , absen d where a.id_jabatan=b.id_jabatan 
    AND d.id_pegawai=a.id_pegawai
  	AND c.id_pegawai=a.id_pegawai
  	group by c.id_tpp");
}


public function tpp_print($id)
{
  return $this->db->query("SELECT * from pegawai a,jabatan b ,tpp c , absen d where a.id_jabatan=b.id_jabatan 
    AND d.id_pegawai=a.id_pegawai
  	AND c.id_pegawai=a.id_pegawai
  	AND c.id_tpp='$id'
  	group by c.id_pegawai");
}


public function cari_gaji($id='')
{
return $this->db->query("SELECT * from pegawai a, jabatan b  where a.id_jabatan=b.id_jabatan AND a.id_pegawai='$id' group by a.id_pegawai");
}

public function cari_jabatan($id='')
{
 return $this->db->query("SELECT * from pegawai a, jabatan b where a.id_pegawai='$id' AND a.id_jabatan=b.id_jabatan group by a.id_pegawai");
}

}