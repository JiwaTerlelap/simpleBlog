<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{ 
		$data = [
            'profile' => $this->db->get('profile')->result_object(),
            'qoutes' => $this->db->get('qoutes')->result_object() ,
            'blog' => $this->db->order_by('id', 'DESC')->limit(3)->get('blog')->result_object(),
            'blogs' => $this->db->order_by('id', 'DESC')->limit(1)->get('blog')->result_object()
		];
		$this->load->view('home/index', $data);
	}
	function blog(){
		$data['blog'] = $this->db->order_by('id', 'DESC')->limit(9)->get('blog')->result_object();
		$this->load->view('home/blog', $data);
	}
	function about(){
		$data['about'] = $this->db->get('profile')->result_object();
		$this->load->view('home/about', $data);
	}
	function contact(){
		$this->load->view('home/kontak');
	}

	function baca_blog($slug =""){
		if($slug == ""){
			redirect('home/blog');
		}else{

		$this->load->model('M_aksi');
		$baca = $this->M_aksi->get_slug($slug);
		$data['baca'] = $baca;
       $this->load->view('home/baca_blog', $data);
		}

	}
	function blog_all(){
		$data['blog'] = $this->db->get('blog')->result_object();
		$this->load->view('home/get_all_blog', $data);
	}
}
