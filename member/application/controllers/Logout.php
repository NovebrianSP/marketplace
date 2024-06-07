<?php
class Logout extends CI_Controller
{
    public function index()
    {
        $this->session->unset_userdata("id_member");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("nama_member");

        $this->session->set_flashdata('pesan_sukses', 'Anda telah logout');
        redirect('/', 'refresh');
    }
}
