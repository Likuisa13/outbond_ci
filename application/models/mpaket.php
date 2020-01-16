<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpaket extends CI_model{

    public function paket()
    {
        $query = $this->db->select("*")
                 ->from('paket_oubond')
                 ->order_by('Id_paket', 'DESC')
                 ->get();
        return $query->result();
    }
}