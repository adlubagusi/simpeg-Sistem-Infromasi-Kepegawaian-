<?php 

/**
* 
*/
class laporan extends CI_controller
{
	
	function __construct()
	{
	parent::__construct();
	if($this->session->userdata('admin') != TRUE){
     redirect(base_url(''));
     exit;
	};
	$this->load->model('m_laporan');
	$this->load->model('m_admin');
	}

	public function laporan_pegawai($value='')
	{
	 $x = array('judul' =>'Laporan Data Pegawai Terdaftar',
	             'data'=>$this->m_laporan->pegawai(),
	             'print'=>FALSE,);	
	 tpl('laporan/pegawai',$x);	
	}

	 public function laporan_pegawai_print($value='')
	{
	 $x = array('judul' =>'Laporan Data Pegawai Terdaftar',
	             'data'=>$this->m_laporan->pegawai(),
	             'print'=>TRUE,);	
	 $this->load->view('laporan/pegawai',$x);	
	}

	public function laporan_absensi($value='')
	{
    if (isset($_POST['cari'])) {
     //cek data apabila berhasi Di kirim maka postdata akan melakukan cek .... dan sebaliknya
     $dari=$this->input->post('dari');
     $sampai=$this->input->post('sampai');
      $x=array(
      	     'judul'=>'Data Laporan Kehadiran Pegawai',
             'data'=>$this->m_laporan->absensi($dari,$sampai),
             'depan'=>FALSE,
             'cetak'=>TRUE);
     $pesan='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Hasil Laporan!</h4>
               Data Laporan Absensi Terhitung Dari.'.tgl_indonesia($this->input->post('dari')).' Sampai Dengan '.tgl_indonesia($this->input->post('sampai')).'
              </div>';
     $this->session->set_flashdata('pesan',$pesan); 
     tpl('laporan/absensi',$x);
    }else{

	$x = array('judul' =>'Laporan Data Absensi Kinerja Pegawai',
               'depan'=>TRUE,
               'cetak'=>FALSE);	
	tpl('laporan/absensi',$x);
	}
}


	public function cetak_laporan_absensi($dari='',$sampai='')
	{
	$x = array(
               'cetak'=>FALSE,
               'depan'=>FALSE,
              
		       'data' => $this->m_laporan->absensi($dari,$sampai),
               'judul'=> 'Data Absensi Pegawai');
    $this->load->view('laporan/absensi',$x);           	
	}

	public function laporan_tpp()
	{
	if(isset($_POST['cari'])){
	$dari=$this->input->post('dari');
	$sampai=$this->input->post('sampai');

	$x = array('judul' =>'Laporan Data Tunjangan Pendapatan Pegawai',
	            'data' => $this->m_laporan->tpp($dari,$sampai),
	            'cetak'=>TRUE,
	            'depan'=>FALSE,);
	tpl('laporan/tpp',$x); 	

	
    }else{
	$x = array('judul' =>'Laporan Data Tunjangan Pendapatan Pegawai',
	            'cetak'=>TRUE,
	            'depan'=>TRUE,);
	tpl('laporan/tpp',$x); 
	}
 }
	public function laporan_tpp_cetak($dari='',$sampai='')
	{
	$x = array('judul' =>'Laporan Data Tunjangan Pendapatan Pegawai',
	            'data' => $this->m_laporan->tpp($dari,$sampai),
	            'cetak'=> FALSE,
	            'depan'=>FALSE,);	
	$this->load->view('laporan/tpp',$x); 
	}
}