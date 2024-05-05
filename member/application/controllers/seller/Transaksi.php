<?php
class Transaksi extends CI_Controller
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
        $this->load->model('Mtransaksi');
        $data['jual'] = $this->Mtransaksi->transaksi_member_jual($id_member);

        $this->load->view('header');
        $this->load->view('seller/transaksi', $data);
        $this->load->view('footer');
    }

    function detail($id_transaksi)
        {
            $this->load->model('Mtransaksi');
            $data['transaksi'] = $this->Mtransaksi->detail($id_transaksi);

            $data['transaksi_detail'] = $this->Mtransaksi->transaksi_detail($id_transaksi);

            $this->load->view('header');
            $this->load->view('seller/transaksi_detail', $data);
            $this->load->view('footer');
        }
}
