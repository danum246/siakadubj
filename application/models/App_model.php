<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class app_model extends CI_Model {

	function getdata($table,$key,$order)
	{
		$this->db->order_by($key, $order);
		$q = $this->db->get($table);
		return $q;
	}

	function insertdata($table,$data)
	{
		$q = $this->db->insert($table, $data);
		return $q;
	}
	
	function get_lembaga(){
		return $this->db->get('tbl_lembaga')->result();
	}
	
	function get_jabatan(){
		$this->db->select('a.*,b.kode_lembaga,b.lembaga');
		$this->db->from('tbl_jabatan a');
		$this->db->join('tbl_lembaga b','a.lembaga_id = b.id_lembaga');
		return $this->db->get()->result();
	}

	function getdetail($table,$pk,$value,$key,$order)
	{
		$this->db->where($pk,$value);
		$this->db->order_by($key, $order);
		$q = $this->db->get($table);
		return $q;
	}

	function updatedata($table,$pk,$value,$data)
	{
		$this->db->where($pk,$value);
		$q = $this->db->update($table, $data);
		return $q;
	}

	function deletedata($table,$pk,$value)
	{
		$this->db->where($pk,$value);
		$q = $this->db->delete($table);
		return $q;
	}
	
	function getlistjab($id){
		$this->db->where('lembaga_id',$id);
		return $this->db->get('tbl_jabatan')->result();
	}
	
	function get_karyawan(){
		$this->db->select('a.*,b.jabatan,c.kode_lembaga');
		$this->db->from('tbl_karyawan a');
		$this->db->join('tbl_jabatan b','a.jabatan_id = b.id_jabatan');
		$this->db->join('tbl_lembaga c','b.lembaga_id = c.id_lembaga');
		return $this->db->get()->result();
	}

	function getlistmenu($id){
		$this->db->where('lembaga_id', $id);
		$getmenu = $this->db->get('tbl_role_access')->result();
		foreach ($getmenu as $row) {
			$menu[] = $row->menu_id;
		}
		$this->db->where_not_in('id_menu', $menu);
		$q = $this->db->get('tbl_menu');
		return $q;
	}

}

/* End of file app_model.php */
/* Location: ./application/models/app_model.php */