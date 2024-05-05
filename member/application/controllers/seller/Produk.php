<?php
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id_member')) {
            $this->session->set_flashdata('pesan_gagal', "Anda harus login");
            redirect('', 'refresh');
        }
    }

    public function index()
    {
        $id_member = $this->session->userdata("id_member");
        $this->load->model('Mproduk');
        $data['produk'] = $this->Mproduk->produk_member($id_member);

        $this->load->view('header');
        $this->load->view('seller/produk_tampil', $data);
        $this->load->view('footer');
    }
}
?>