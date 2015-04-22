<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{	
		$data['karyawan'] = $this->app_model->get_karyawan();
		$data['lembaga'] = $this->app_model->get_lembaga();
		$data['page'] = 'data/karyawan_view';
		$this->load->view('template',$data);
	}
	
	function load_edit($idk){
		$data['lembaga'] = $this->app_model->get_lembaga();
		$data['row'] = $this->db->query("select a.*,c.id_lembaga from tbl_karyawan a
		join tbl_jabatan b on a.jabatan_id = b.id_jabatan
		join tbl_lembaga c on b.lembaga_id = c.id_lembaga
		where id_kary = '$idk'")->row();
		$this->load->view('data/karyawan_edit',$data);
	}
	
	function upload_photo($data,$name){
		$file = $data;
		$folder = "./assets/upload/photos/";
		$folder = $folder . basename($name);
		move_uploaded_file($data['tmp_name'], $folder);	
	}
	
	function get_listjab($id){
		$data = $this->db->query("select * from tbl_jabatan where lembaga_id = '$id'")->result();
		$list = "<option> -- </option>";
		foreach($data as $row){
		$list .= "<option value='".$row->id_jabatan."'>".$row->jabatan."</option>";
		}
		die($list);
	}
	
	function save_karyawan(){
		$photo = date('Ymdhis').'_'.$_FILES['foto']['name'];
		$this->upload_photo($_FILES['foto'],$photo);
		$data = array(
		'nik'		  => $this->input->post('nik'),
		'nama'		  => $this->input->post('nama'),
		'jns_kel'	  => $this->input->post('jk'),
		'alamat'      => $this->input->post('alamat'),
		'hp'		  => '+62'.$this->input->post('telepon'),
		'email'		  => $this->input->post('email'),
		'jabatan_id'  => $this->input->post('jabatan'),
		'status'	  => $this->input->post('status'),
		'pictures'	  => $photo
		);
		$this->app_model->insertdata('tbl_karyawan',$data);
		echo "<script>alert('Sukses');
		document.location.href='".base_url()."data/karyawan';</script>";
	}
	
	function update_karyawan(){
		$photo = date('Ymdhis').'_'.$_FILES['foto']['name'];
		$this->upload_photo($_FILES['foto'],$photo);
		$data = array(
		'nik'		  => $this->input->post('nik'),
		'nama'		  => $this->input->post('nama'),
		'jns_kel'	  => $this->input->post('jk'),
		'alamat'      => $this->input->post('alamat'),
		'hp'		  => '+62'.$this->input->post('telepon'),
		'email'		  => $this->input->post('email'),
		'jabatan_id'  => $this->input->post('jabatan'),
		'status'	  => $this->input->post('status'),
		'pictures'	  => $photo
		);
		$this->db->where('id_kary',$this->input->post('id_karyawan'));
		$this->db->update('tbl_karyawan',$data);
		echo "<script>alert('Sukses');
		document.location.href='".base_url()."data/karyawan';</script>";
	}
	
	function del_karyawan($id){
		$this->app_model->deletedata('tbl_karyawan','id_kary',$id);
		echo "<script>alert('Berhasil');
		document.location.href='".base_url()."data/karyawan';</script>";
	}

}

/* End of file karyawan.php */
/* Location: ./application/controllers/karyawan.php */