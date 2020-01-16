<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdata extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('paket_oubond')
                 ->order_by('Id_paket', 'DESC')
                 ->get();
        return $query->result();
    }
    public function get_pemesanan()
    {
        $query = $this->db->select("*")
                 ->from('pemesanan')
                 ->order_by('Id_pemesanan', 'DESC')
                 ->get();
        return $query->result();
    }
    public function get_wisatawan()
    {
        $query = $this->db->select("*")
                 ->from('wisatawan')
                 ->order_by('id_wisatawan', 'DESC')
                 ->get();
        return $query->result();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("paket_oubond", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    public function simpanpesanan($data)
    {

        $query = $this->db->insert("pemesanan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    public function simpanwisatawan($data)
    {

        $query = $this->db->insert("wisatawan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }
    public function simpan_upload($data, $data1){
      
        $result= $this->db->insert('paket_oubond',$data, $data1);
        return $result;
    }
    public function edit($id)
    {

        $query = $this->db->where("Id_paket", $id)
                ->get("paket_oubond");

        if($query){
            return $query->row();
        }else{
            return false;
    }
    }
    public function update($data, $id)
    {

        $query = $this->db->update("paket_oubond", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
     public function hapus($id)
    {

    $this->db->where('Id_paket', $id);
    $this->db->delete('paket_oubond'); // Untuk mengeksekusi perintah delete data
    }

    public function hapuspesanan($id)
    {
    $this->db->where('Id_pemesanan', $id);
    $this->db->delete('pemesanan'); // Untuk mengeksekusi perintah delete data
    }
}