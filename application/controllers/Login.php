<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

function __construct()
 {
	parent::__construct();
	$this->load->library('session');
	$this->load->database();

	$this->load->model('mlogin');
 }

public function index()
 {
	$data['title'] = "This is Login";
	$this->load->view('vlogin',$data);
 }

function cekLogin()
 {
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$this->mlogin->getlogin($username,$password);
 }
function logout() 
 {
 	$this->session->sess_destroy();
	redirect('dash','refresh');
 }
}