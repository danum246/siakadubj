<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function index()
	{
		$data['parent'] = $this->db->query("select * from tbl_menu where parent_menu = 0")->result();
		$data['jabatan'] = $this->app_model->get_jabatan();
		$data['page'] = 'setting/role_view';
		$this->load->view('template',$data);
	}
	
	function getdataedit($id_jabatan){
		$data['parent'] = $this->db->query("select * from tbl_menu where parent_menu = 0")->result();
		$data['jabatan'] = $id_jabatan;
		$this->load->view('setting/edit_role_view',$data);
	}

	function list_menu($id)
	{
		$tmp = '';
		$list = $this->app_model->getlistmenu($id)->result();
		
		if (!empty($list)) {
            $tmp .= "<option value=''> -- Pilih -- </option>";
            foreach ($list as $row) {
            	if ($row->parent_menu != 0) {
            		$tmp .= "<option value='" . $row->id_menu . "'>" . $row->menu . "</option>";
            	} else {
            		$tmp .= "<option value='" . $row->id_menu . "'> -- <b>" . $row->menu . "* -- </b> </option>";
            	}       
            }
        } else {
            $tmp .= "<option value=''> -- Pilih -- </option>";
        }
        die($tmp);
	}

	function save()
	{
		$data['jabatan_id'] = $this->input->post('jabatan', TRUE);
		$data['menu_id'] = $this->input->post('menu', TRUE);
		$insert = $this->app_model->insertdata('tbl_role_access',$data);
		if ($insert == TRUE) {
			echo "<script>alert('Berhasil');document.location.href='".base_url()."setting/role';</script>";
		} else {
			echo "<script>alert('Gagal Simpan Data');history.go(-1);</script>";
		}
	}
	
	function edit_role(){
		$trows = $this->input->post('trows');
		$prows = $this->input->post('prows');
		$jabatan = $this->input->post('id_jabatan');
		//die($trows." ".$jabatan);
		$this->db->query("delete from tbl_role_access where jabatan_id = '$jabatan'");
		for($no = 1; $no <= $trows; $no++){
			$menu = $this->input->post('menu'.$no);
			if($menu == 1){
			$data = array(
			'menu_id'	=> $this->input->post('kode'.$no),
			'jabatan_id'=> $jabatan
			);
			$this->db->insert('tbl_role_access',$data);
			}
		}
		for($no = 1; $no <= $prows; $no++){
			$menu = $this->input->post('parent'.$no);
			if($menu == 1){
			$data = array(
			'menu_id'	=> $this->input->post('parmen'.$no),
			'jabatan_id'=> $jabatan
			);
			$this->db->insert('tbl_role_access',$data);
			}
		}
		redirect('setting/role');
	}

}

/* End of file role.php */
/* Location: ./application/controllers/role.php */