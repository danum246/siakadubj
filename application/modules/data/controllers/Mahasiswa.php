<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$id_menu = 32 (database); cek apakah user memiliki akses
		if ($this->session->userdata('sess_login') == TRUE) {
			$akses = $this->login_model->cekakses(32)->result();
			if ($akses != TRUE) {
				redirect('home','refresh');
			}
		} else {
			redirect('auth','refresh');
		}
	}

	function index()
	{	
		$data['page'] = 'data/mahasiswa_view';
		$this->load->view('template',$data);
	}

	function view_mhs(){
		$data['page'] = 'data/mahasiswa_lihat';
		$this->load->view('template',$data);
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/modules/data/controllers/mahasiswa.php */