<?php
/*halaman login utama 

author by Ismarianto Putra TEch Programer */

class Login extends CI_controller
{
	
	function __construct()
	{
	parent::__construct();	 
	$this->load->model('login_m');
	
	}

  public function index()
  {
   	if(isset($_POST['login'])){

      $username=barasiah($this->input->post('username'));
      $password=barasiah($this->input->post('password'));
     
      //cek data login
      $admin  = $this->login_m->admin($username,md5($password));
      $pegawai= $this->login_m->pegawai($username,md5($password));

      if($admin->num_rows() > 0 ){
        $DataAdmin=$admin->row_array();
        $sessionAdmin = array(
            'admin'    => TRUE,
        	  'id_admin' => $DataAdmin['id_admin'],
            'username' => $DataAdmin['username'],
            'password' => $DataAdmin['password'],
            'nama'     => $DataAdmin['nama'],
            'level'    => $DataAdmin['level'] );        
       $this->session->set_userdata($sessionAdmin);
       $this->session->set_flashdata('pesan','<div class="btn btn-primary">Anda Berhasil Login .....</div>');
       redirect(base_url('admin/index'));
      }elseif($pegawai->num_rows() > 0){
        $DataPegawai=$pegawai->row_array();
        $sessionPegawai = array(
            'admin'    => TRUE,
            'id_pegawai'=> $DataPegawai['id_pegawai'],
            'username'  => $DataPegawai['username'],
            'password'  => $DataPegawai['password'],
            'nama'      => $DataPegawai['nama'],
            'level'     => 'pegawai',
              );        


      $this->session->set_userdata($sessionPegawai);
      $this->session->set_flashdata('pesan','<div class="btn btn-primary">Anda Berhasil Login .....</div>');
      redirect(base_url('admin/index'));

      }else{
       $this->session->set_flashdata('pesan','<div class="btn btn-primary">Maaf Informasi Login Tidak Di Kenali <br />
       	                             Username Dan Password Salah</div>');
       redirect(base_url(''));

      }
    }else{ 
      $x = array(
      	          'judul' =>'.:: Login Aplikasi ::.');
      $this->load->view('login',$x);

    }

   }

}