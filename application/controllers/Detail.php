<?php 
/**
* 
*/
class Detail extends CI_Controller
{

	function baca($slug = ""){
		if($slug == ""){
			show_404();
		}else{
			$this->load->model('M_aksi');
			$baca = $this->M_aksi->get_slug($slug);
			$data['baca'] = $baca;
			$this->load->view('home/baca_blog', $data);


		}
	}
}

?>