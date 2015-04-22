<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mk extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$id_menu = 32 (database); cek apakah user memiliki akses
		if ($this->session->userdata('sess_login') == TRUE) {
			$akses = $this->login_model->cekakses(34)->result();
			if ($akses != TRUE) {
				redirect('home','refresh');
			}
		} else {
			redirect('auth','refresh');
		}
	}

	function index()
	{	
		$akademik['page'] = 'akademik/mk_view';
		$this->load->view('template',$akademik);
	}

	function view_mk(){
		$akademik['page'] = 'akademik/mk_lihat';
		$this->load->view('template',$akademik);
	}

}

/* End of file mk.php */
/* Location: ./application/modules/akademik/controllers/mahasiswa.php */