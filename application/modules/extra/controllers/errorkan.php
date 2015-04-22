<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class errorkan extends CI_Controller {

	public function index()
	{
		$this->load->view('extra/error404');
	}

}

/* End of file error404.php */
/* Location: ./application/controllers/error404.php */