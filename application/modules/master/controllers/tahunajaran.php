<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tahunajaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{	
		$data['page'] = 'master/tahunajaran_view';
		$this->load->view('template',$data);
	}

	function view_edit($id){
		$this->load->view('master/tahunajaran_edit');
	}

}

/* End of file tahunajaran.php */
/* Location: ./application/modules/master/controllers/tahunajaran.php */