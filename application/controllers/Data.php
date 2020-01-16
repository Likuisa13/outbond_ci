<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    
    public function __construct(){

        parent ::__construct();
        if(! $this->session->userdata('usernametutorial')){
        redirect('login');
        }
        //load model
        $this->load->model('mdata'); 
    }
    public function index()
    {
        $data = array(

            'title'     => 'Data Paket',
            'data_paket' => $this->mdata->get_all(),

        ); 

        $this->load->view('vdatapaket', $data);
    }
    public function indexpemesanan()
    {
        $dt  = array(
            'title' => 'Data Pemesanan',
            'data_pemesanan' => $this->mdata->get_pemesanan(),
        );
        $this->load->view('vdatapesanan', $dt);
    }
    public function indexwisatawan()
    {
        $dt  = array(
            'title' => 'Data Wisatawan',
            'data_wisatawan' => $this->mdata->get_wisatawan(),
        );
        $this->load->view('vdatawisatawan', $dt);
    }
    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data'

        );

        $this->load->view('vtambahdata', $data);
    }
    public function tambahpemesanan()
    {
        $data = array(

            'title'     => 'Tambah Data Pemesanan'

        );

        $this->load->view('vtambahpesanan', $data);
    }
    public function tambahwisatawan()
    {
        $data = array(

            'title'     => 'Tambah Data Wisatawan'

        );

        $this->load->view('wisatawan', $data);
    }
    public function simpan()
    {
        $data1 = array('upload_data' => $this->upload->data());
        $data = array(

           'Id_paket'    => $this->input->post("Id_paket"),
           // 'Kd_paket'    => $this->input->post("Kd_paket"),
           'Jenis_paket'    => $this->input->post("Jenis_paket"),
           'Harga'    => $this->input->post("Harga"),
           'Fasilitas'      => $this->input->post("Fasilitas"),
           'Kegiatan'  => $this->input->post("Kegiatan"),

        );

        $this->mdata->simpan($data, $data1);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.</div>');

        //redirect
        redirect('data/');

    }
    public function simpanpesanan()
    {
        $data1 = array('upload_data' => $this->upload->data());
        $data = array(

           'Id_pemesanan'    => $this->input->post("Id_pemesanan"),
           // 'Kode_pemesanan'    => $this->input->post("Kode_pemesanan"),
           'Kd_paket'    => $this->input->post("Kd_paket"),
           'Tgl_pemesanan'    => $this->input->post("Tgl_pemesanan"),
           'Jml_peserta'    => $this->input->post("Jml_peserta"),
           'Total_harga'    => $this->input->post("Total_harga"),

        );

        $this->mdata->simpanpesanan($data, $data1);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.</div>');

        //redirect
        redirect('dash/pesan');

    }
    public function simpanwisatawan()
    {
        $data1 = array('upload_data' => $this->upload->data());
        $data = array(

           'id_wisatawan'   => $this->input->post("id_wisatawan"),
           'nama'           => $this->input->post("nama"),
           'nama_instansi'  => $this->input->post("nama_instansi"),
           'alamat'         => $this->input->post("alamat"),
           'email'          => $this->input->post("email"),
           'no_telp'        => $this->input->post("no_telp"),

        );

        $this->mdata->simpanwisatawan($data, $data1);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data wisatawan berhasil disimpan silakan pilih pesanan.</div>');

        //redirect
        redirect('dash/pesan');

    }
    public function edit($id)
    {
        $id = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data',
            'data_paket' => $this->mdata->edit($id)

        );

        $this->load->view('veditdata', $data);
    }
     public function update()
    {
        $id['Id_paket'] = $this->input->post("Id_paket");
        $data1 = array('upload_data' => $this->upload->data());
        $data = array(

            'Id_paket'        => $this->input->post("Id_paket"),
            // 'Kd_paket'    => $this->input->post("Kd_paket"),
            'Jenis_paket'      => $this->input->post("Jenis_paket"),
            'Harga'    => $this->input->post("Harga"),
            'Fasilitas'      => $this->input->post("Fasilitas"),
            'Kegiatan'    => $this->input->post("Kegiatan"),

        );

        $this->mdata->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('data/index');

    }

    public function hapus($id)
    {
        $id['Id_paket'] = $this->uri->segment(3);

        $this->mdata->hapus($id);

        //redirect
        redirect('data/');

    }
    public function hapuspemesanan($id)
    {
        $id['Id_pemesanan'] = $this->uri->segment(3);

        $this->mdata->hapuspesanan($id);

        //redirect
        redirect('data/indexpemesanan');

    }
}




