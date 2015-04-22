<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getchangedata extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('sess_login') != TRUE) {
		 	redirect('auth','refresh');
		}
	}

	function getkabupaten($id)
	{
		$tmp = '';
		$list = $this->app_model->getdetail('tbl_kabupaten','provinsi_id',$id,'kabupaten_kota','asc')->result();
		if (!empty($list)) {
            $tmp .= "<option value=''> -- Pilih -- </option>";
            foreach ($list as $row) {
            	$tmp .= "<option value='" . $row->id_kabupaten . "'> " . $row->kabupaten_kota . " </option>";      
            }
        } else {
            $tmp .= "<option value=''> -- Pilih -- </option>";
        }
        die($tmp);
	}	

	function getkecamatan($id)
	{
		$tmp = '';
		$list = $this->app_model->getdetail('tbl_kecamatan','kabupaten_id',$id,'kecamatan','asc')->result();
		if (!empty($list)) {
            $tmp .= "<option value=''> -- Pilih -- </option>";
            foreach ($list as $row) {
            	$tmp .= "<option value='" . $row->id_kecamatan . "'> " . $row->kecamatan . " </option>";      
            }
        } else {
            $tmp .= "<option value=''> -- Pilih -- </option>";
        }
        die($tmp);
	}	

}

/* End of file getchangedata.php */
/* Location: ./application/controllers/getchangedata.php */