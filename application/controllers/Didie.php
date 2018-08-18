<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Didie extends CI_Controller
{
	function __construct(){
  	 parent::__construct();
     $this->load->model('M_aksi');
     $this->load->helper(array('form','url','slug'));
     if($this->session->userdata('status') != 'Aktif'){
  	  	redirect('Asup');
  	  }
  	}
	function index(){
		$data = [
			'blog' => $this->db->get('blog')->num_rows(),
			'qoutes' => $this->db->get('qoutes')->num_rows(),
			'user' => $this->db->get('user')->num_rows(),
			'qout' => $this->db->get('qoutes')->result_object()
		];
		$this->load->view('dashboard/index',$data);
	}
	function data_blog(){
		$data['blog'] = $this->db->get('blog')->result_object();
		$this->load->view('dashboard/data_blog', $data);
	}
	function profile(){
		$data['profile'] = $this->db->get('profile')->result();
		$this->load->view('dashboard/profile', $data);
	}
	function blog(){
		$this->load->view('dashboard/tambah_blog');
	}
	function qoutes(){
		$this->load->view('dashboard/qoutes');
	}


	function update_profile(){
		$data = array(
              'judul' => $this->input->post('judul'),
              'isi' => $this->input->post('isi')
		);
		
		 $valid = $this->db->update('profile', $data, array('id' => '1'));
		   if(!$valid){
		   	echo "<script>alert('Gagal melakukan update profile !');history.go(-1);</script>";
		   }else{
		   	echo "<script>alert('Success melakukan update profile !');history.go(-1);</script>";
		   }
	}

	function simpan_qout(){
		$data = array(
                'isi' => htmlspecialchars($this->input->post('isi'))
		);

		$valid = $this->db->insert('qoutes', $data);
		 if(!$valid){
		   	echo "<script>alert('Gagal Menambahkan  Qoutes !');history.go(-1);</script>";
		   }else{
		   	redirect('didie');
		   }
	}
	function simpan_blog(){
		$filename = md5(uniqid());
		$config = array(
              'upload_path' => "./assets/foto/blog",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => $filename
		);
		$this->load->library('upload', $config);
		 if(!$this->upload->do_upload('gambar')){
		 	$error = $this->upload->display_errors();
		 	echo $error;
		 }else{
		 	$gambar = $this->upload->data();
		 	 $data = [
		 	 	'judul' => htmlspecialchars($this->input->post('judul')),
		 	 	'tanggal_upp' => $this->input->post('tgl'),
		 	 	'slug_blog' => slug($this->input->post('judul')),
		 	 	'isi' => $this->input->post('isi'),
		 	 	'foto' => $gambar['file_name'],
		 	 	'user' => $this->input->post('sp')
		 	 ];
		 	 $valid = $this->db->insert('blog', $data);
		 	   if(!$valid){
		   			echo "<script>alert('Gagal Menambahkan  Qoutes !');history.go(-1);</script>";
		   		}else{
		   		 redirect('didie/data_blog');
		     }

		 }
	}

	 function hapus_blog($id){
      $where = array('id' => $id);
      $hapus = $this->M_aksi->delete($where, 'blog');
       if(!$hapus){
        echo "<script>alert('Data berhasil di hapus !');history.go(-1);</script>";
       }else{
        echo "<script>alert('Data gagal di hapus');history.go(-1);</script>";
       }
  }
  function edit_blog($id = ""){
  	if($id == ""){
  		redirect('didie/data_blog');
  	}else{
  	$where = array('id' => $id);
  	$data['blog'] = $this->M_aksi->edit_data($where, 'blog')->result();
  	$this->load->view('dashboard/edit_blog', $data);
  }
}

  function update_blog(){
  	$filename = md5(uniqid());
		$config = array(
              'upload_path' => "./assets/foto/blog",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => $filename
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$gambar = $this->upload->data();
            $data = [
		 	 	'judul' => $this->input->post('judul'),
		 	 	'tanggal_upp' => $this->input->post('tgl'),
		 	 	'isi' => $this->input->post('isi'),
		 	 	'foto' => $gambar['file_name'],
		 	 	'user' => $this->input->post('sp')
		 	 ];
		 	 $id = $this->input->post('id');
		 	 $valid = $this->db->update('blog', $data, array('id' => $id));
		 	   if(!$valid){
        			echo "<script>alert('Data berhasil di Update !');history.go(-1);</script>";
       				}else{
        				redirect('didie/data_blog');
       				}
		}else{
			$error = $this->upload->display_errors();
			echo $error;
		}
  }
  function hapus_qout($id){
  	$where = array('id' => $id);
  	$hapus = $this->M_aksi->delete($where, 'qoutes');
  	 if(!$hapus){
  	 	echo "<script>alert('Data berhasil di hapus !');history.go(-1);</script>";
  	 }else{
  	 	echo "<script>alert('Data gagal di hapus !');history.go(-1);</script>";
  	 }
  }
  function edit_qout($id = ""){
  	if($id == ""){
  		redirect('didie');
  	}else{
  	$where = array('id' => $id);
  	$data['qout'] = $this->M_aksi->edit_data($where, 'qoutes')->result();
  	$this->load->view('dashboard/edit_qout', $data);
  }
}
  function update_qout(){
  	$data = [
         'isi' => $this->input->post('isi')
  	];
  	$id = $this->input->post('id');
  	 $sukses = $this->db->update('qoutes', $data, array('id' => $id));
  	  if(!$sukses){
  	  	echo "<script>alert('Data gagal di update !');history.go(-1);</script>";
  	  }else{
  	  	redirect('didie');
  	  }
  }
  function tambah_admin(){
  	$this->load->view('dashboard/tambah_admin');
  }
  function simpan_admin(){
  	 	$filename = md5(uniqid());
		$config = array(
              'upload_path' => "./assets/foto/admin",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => $filename
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$gambar = $this->upload->data();
            $data = [
		 	 	'username' => $this->input->post('Username'),
		 	 	'password' => md5($this->input->post('Password')),
		 	 	'umur' => $this->input->post('umur'),
		 	 	'status' => $this->input->post('Status'),
		 	 	'foto' => $gambar['file_name']
		 	 ];
		 	 $valid = $this->db->insert('user', $data);
		 	  if($valid){
		 	  	redirect('didie/data_admin');
		 	  }
  }else{
        redirect('didie/tambah_admin');
  }
}
function data_admin(){
	$data['admin'] = $this->db->get('user')->result_object();
	$this->load->view('dashboard/data_admin', $data);
}
function hapus_admin($id){
    $where = array('id' => $id);
  	$hapus = $this->M_aksi->delete($where, 'user');
  	 if(!$hapus){
  	 	echo "<script>alert('Data berhasil di hapus !');history.go(-1);</script>";
  	 }else{
  	 	echo "<script>alert('Data gagal di hapus !');history.go(-1);</script>";
  	 }
}
function edit_admin($id = ""){
  if($id == ""){
  	 redirect('didie/data_admin');
  	}else{
  	$where = array('id' => $id);
  	$data['admin'] = $this->M_aksi->edit_data($where, 'user')->result();
  	$this->load->view('dashboard/edit_admin', $data);
  }

}
function update_admin(){
	  	$filename = md5(uniqid());
		$config = array(
              'upload_path' => "./assets/foto/admin",
              'allowed_types' => "jpg|png|jpeg",
              'width' => 300,
              'height' => 250,
              'overwrite' => TRUE,
              'file_name' => $filename
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar')){
			$gambar = $this->upload->data();
            $data = [
		 	 	'username' => $this->input->post('Username'),
		 	 	'password' => md5($this->input->post('Password')),
		 	 	'umur' => $this->input->post('umur'),
		 	 	'status' => $this->input->post('Status'),
		 	 	'foto' => $gambar['file_name']
		 	 ];
		 	 $id = $this->input->post('id');
		 	 $valid = $this->db->update('user', $data, array('id' => $id));
		 	  if($valid){
		 	  	redirect('didie/data_admin');
		 	  }else{
		 	  	 echo "<script>alert('Data gagal di update !');history.go(-1);</script>";
		 	  }
  }else{
        redirect('didie/tambah_admin');
  }
}
}


?>