<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

function getlogin($username,$password)
{
if($username !='' && $password !='')
{
$pass = $password;

$this->db->where("status",'0');
$this->db->where("username",$username);
$this->db->where("password",$pass);
$query = $this->db->get("user");
if($query->num_rows() > 0){
foreach($query->result() as $row){
$user = array(
"usernametutorial" => $row->username
);
$this->session->set_userdata($user);
redirect('admin/index');
}
}
elseif($username !='' && $password !='')
{
$pass = $password;

$this->db->where("status",'1');
$this->db->where("username",$username);
$this->db->where("password",$pass);
$query = $this->db->get("user");
if($query->num_rows() > 0){
foreach($query->result() as $row){
$user = array(
"usernametutorial" => $row->username
);
$this->session->set_userdata($user);
redirect('data/indexpemesanan');
}
}
else
{
// Jika username atau password tidak sama
redirect('login');
}
}
else
{
// Jika username atau password kosong
redirect('login/');
}
}
}
}
