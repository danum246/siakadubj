<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fakultas extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{	
		$data['page'] = 'master/fakultas_view';
		$this->load->view('template',$data);
	}

	function view_edit($id){
		$this->load->view('master/fakultas_edit');
	}

}

/* End of file fakultas.php */
/* Location: ./application/modules/master/controllers/fakultas.php */