<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perusahaan_Model');
	}
	public function index($id)
	{
			
			$data['lokasi_array']=$this->Perusahaan_Model->getLokasi($id);
			$this->load->view('lokasi',$data);
			
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>