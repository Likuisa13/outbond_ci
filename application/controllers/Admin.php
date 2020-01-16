<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
	if(! $this->session->userdata('usernametutorial')){
		redirect('login');
		}
	}  

	public function index()
	{
		$data = array();
		// $data['page'] = 'admin/vdatapaket';
		$this->load->view('admin/home', $data);
	}

	public function pemesanan()
	{
		$data = array();
		$data['page'] = 'admin/pemesanan';
		$this->load->view('admin/template_admin', $data);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */