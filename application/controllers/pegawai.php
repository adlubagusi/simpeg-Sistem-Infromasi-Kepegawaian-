<?php

/**
* 
*/
class Pegawai extends CI_controller
{
	
	function __construct()
	{
	 parent:: __construct();
	 if($this->session->userdata('pegawai') != TRUE){
      redirec(base_url(''));
      exit;
	 };
	}

	public function index()
	{
	 $x = array('judul' =>'Halaman Administrator');
	 tpl('admin/home',$x);
	}
}