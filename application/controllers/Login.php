<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();
		 $this->load->model('M_aksi');
	}
	
	function index(){
		$this->load->view('login');
	}
	function PrOsesLogin(){
		$data = [
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
		];
		$validasi = $this->M_aksi->validasi($data);
		  if($validasi->num_rows() == 1){
		  	  foreach ($validasi->result() as $key) {
		  	  	 $session_data['status'] = $key->status;
		  	  	 $session_data['username'] = $key->username;
		  	  	 $session_data['umur'] = $key->umur;
		  	  	 $session_data['foto'] = $key->foto;

		  	  	 $this->session->set_userdata($session_data);
		  	  	  if($this->session->userdata('status') == 'Aktif'){
		  	  	  	redirect('dashboard');
		  	  	  }else{
		  	  	  	echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		  	  	  }
		  	  }
		  }else{
		  	  	 echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
		  	  }

	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}

?>