<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perusahaan_Model');
	}
	public function index($id)
	{
			
			$data['produk_array']=$this->Perusahaan_Model->getProduk($id);
			$this->load->view('produk',$data);
			
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>