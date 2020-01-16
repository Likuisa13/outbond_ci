<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function __construct() {
	// 	parent::__construct();
	// if(! $this->session->userdata('usernametutorial')){
	// 	redirect('login');
	// 	}
	// }  
	public function __construct(){

        parent ::__construct();
        //load model
        $this->load->model('mpaket'); 
    }
	public function index()
	{
		$data = array();
		$data['page'] = 'content';
		$this->load->view('index', $data);
	}
	public function about()
	{
		// echo "helo";
		$data = array();
		$data['page'] = 'about';
		$this->load->view('index', $data);
	}
	
	public function pesan()
	{
		$data = array();
		$data['page'] = 'pesan';
		$this->load->view('index', $data);
	}
	public function paket()
	{
			$data = array(

            'title'     => 'Data Paket',
            'data_paket' => $this->mpaket->paket(),

        );

		$data['page'] = 'paket';
		$this->load->view('index', $data);
	}
}
