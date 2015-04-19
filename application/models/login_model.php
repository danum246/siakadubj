<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model {

	function cekuser($user,$pass)
	{
		$this->db->select('*');
		$this->db->from('tbl_user_login a');
		$this->db->join('tbl_karyawan b', 'a.nik = b.nik');
		$this->db->join('tbl_jabatan c', 'b.jabatan_id = c.id_jabatan');
		$this->db->join('tbl_lembaga d', 'c.lembaga_id = d.id_lembaga');
		$this->db->where('a.username', $user);
		$this->db->where('a.password', sha1(md5($pass).key));
		$this->db->where('a.status', 1);
		$this->db->where('b.status', 1);
		
		$q = $this->db->get();
		return $q;
	}

	function getparentmenu()
	{
		$sess = $this->session->userdata('sess_login'); 
		$lembaga = $sess['lembaga_id'];
		$this->db->select('*');
		$this->db->from('tbl_menu a');
		$this->db->join('tbl_role_access b', 'a.id_menu = b.menu_id');
		$this->db->join('tbl_jabatan c', 'b.lembaga_id = c.lembaga_id');
		$this->db->join('tbl_karyawan d', 'c.id_jabatan = d.jabatan_id');
		$this->db->where('a.parent_menu', 0);
		$this->db->where('b.lembaga_id', $lembaga);
		$this->db->order_by('a.menu', 'asc');

		$q = $this->db->get();
		return $q;
	}

	function getmenu($id)
	{
		$sess = $this->session->userdata('sess_login'); 
		$lembaga = $sess['lembaga_id'];
		$this->db->select('*');
		$this->db->from('tbl_menu a');
		$this->db->join('tbl_role_access b', 'a.id_menu = b.menu_id');
		$this->db->join('tbl_jabatan c', 'b.lembaga_id = c.lembaga_id');
		$this->db->join('tbl_karyawan d', 'c.id_jabatan = d.jabatan_id');
		$this->db->where('a.parent_menu', $id);
		$this->db->where('b.lembaga_id', $lembaga);
		$q = $this->db->get();
		return $q;	
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */