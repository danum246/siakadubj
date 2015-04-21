<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auth extends CI_Controller {

	function index()
	{
		if ($this->session->userdata('sess_login') != '') {
			redirect('home','refresh');
		} else {
			$this->load->view('login');
		}
	}

	function login()
	{
		$user = $this->input->post('username', TRUE);
		$pass = $this->input->post('password', TRUE);
		$cek = $this->login_model->cekuser($user,$pass)->result();
		if (count($cek) > 0) {
			foreach ($cek as $row) {
				$session['password_plain'] = $row->password_plain;
				$session['nik'] = $row->nik;
				$session['username'] = $row->username;
				$session['nama'] = $row->nama;
				$session['lembaga'] = $row->kode_lembaga;
				$session['jabatan_id'] = $row->id_jabatan;
				$session['id_user'] = $row->id_user;
				$this->session->set_userdata('sess_login',$session);
				$this->index();
			}
		} else {
			echo "Gagal Login , <a href=".base_url()."auth> Back >> </a>";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
        redirect('auth', 'refresh');
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */