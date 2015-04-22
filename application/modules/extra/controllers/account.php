<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{
		$data['page'] = 'extra/account';
		$this->load->view('template',$data);
	}

	function changepass()
	{
		$user = $this->session->userdata('sess_login');
		$new = $this->input->post('new', TRUE);
		$old = $this->input->post('old', TRUE);
		if ($user['password_plain'] == $old) {
			$data['password_plain']= $new;
			$data['password']= sha1(md5($data['password_plain']).key);
			$update = $this->app_model->updatedata('tbl_user_login','id_user',$user['id_user'],$data);
			if ($update == TRUE) {
				echo "<script>alert('Berhasil');document.location.href='".base_url()."account';</script>";
			} else {
				echo "<script>alert('Gagal Edit Data');history.go(-1);</script>";
			}
		} else {
			echo "<script>alert('Password Lama Salah');history.go(-1);</script>";
		}
		
	}

}

/* End of file account.php */
/* Location: ./application/controllers/account.php */