<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{
		$data['page'] = 'home';
		$this->load->view('template',$data);
		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */