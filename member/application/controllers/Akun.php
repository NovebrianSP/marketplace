<?php
class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }

    function index()
    {
        $this->load->model('Mongkir');
        $data['distrik'] = $this->Mongkir->tampil_distrik();
        $inputan = $this->input->post();

        $this->form_validation->set_rules('email_member', 'Email', 'required');
        $this->form_validation->set_rules('nama_member', 'Nama lengkap', 'required');
        $this->form_validation->set_rules('alamat_member', 'Alamat', 'required');
        $this->form_validation->set_rules('wa_member', 'No Handphone', 'required');
        $this->form_validation->set_rules('kode_distrik_member', 'Kode Distrik', 'required');
        $this->form_validation->set_rules('nama_distrik_member', 'Nama Distrik', 'required');

        $this->form_validation->set_message('required', '%s wajib diisi');

        if ($this->form_validation->run() == TRUE) {
            $this->load->model('Mmember');
            $id_member = $this->session->userdata('id_member');

            $kode_distrik_member = $this->input->post("kode_distrik_member");
            $detail = $this->Mongkir->detail_distrik($kode_distrik_member);
            $inputan['nama_distrik_member'] = $detail['type'] . " " . $detail['city_name'] . " " . $detail['province'];

            $this->Mmember->ubah($inputan, $id_member);

            $this->session->set_flashdata('pesan_sukses', 'Data akun telah diubah');
            redirect('home', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('akun', $data);
        $this->load->view('footer');
    }
}
