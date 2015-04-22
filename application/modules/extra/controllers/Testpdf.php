<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testpdf extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Cfpdf');
	}

	public function index()
	{
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','',12);
        $teks = "Cara Gampang Integrasi FPDF dengan Codeigniter";
        // mencetak 10 baris kalimat dalam variable "teks".
        for( $i=0; $i < 10; $i++ ) {
            $pdf->Cell(0, 5, $teks, 1, 1, 'L');
        }
        $pdf->Output();
    }

}

/* End of file testpdf.php */
/* Location: ./application/controllers/testpdf.php */