<?php
class Register extends CI_Controller
{
  public function index()
  {
    $this->load->model('Mongkir');
    $this->load->model('Mmember');
    $data['distrik'] = $this->Mongkir->tampil_distrik();

    $this->form_validation->set_rules("email_member", "email", "Required|is_unique[member.email_member]");
    $this->form_validation->set_rules("password_member", "password", "Required");
    $this->form_validation->set_rules("nama_member", "nama", "Required");
    $this->form_validation->set_rules("alamat_member", "email", "Required");
    $this->form_validation->set_rules("wa_member", "wa", "Required");
    $this->form_validation->set_rules("city_id", "city_id", "Required");

    $this->form_validation->set_message("Required", "%s wajib diisi");
    $this->form_validation->set_message("is_unique", "%s yang sama sudah digunakan");
    if ($this->form_validation->run() == TRUE) {
      $city_id = $this->input->post("city_id");
      $detail = $this->Mongkir->detail_distrik($city_id);

      $m['email_member'] = $this->input->post("email_member");
      $m['password_member'] = $this->input->post("password_member");
      $m['password_member'] = sha1($m['password_member']);
      $m['nama_member'] = $this->input->post("nama_member");
      $m['alamat_member'] = $this->input->post("alamat_member");
      $m['wa_member'] = $this->input->post("wa_member");
      $m['kode_distrik_member'] = $this->input->post("city_id");
      $m['nama_distrik_member'] = $detail['type'] . " " . $detail['city_name'] . " " . $detail['province'];

      $this->Mmember->register($m);
      $this->session->set_flashdata('pesan_sukses', 'Registrasi berhasil, silahkan login');
    }

    $this->load->view('header');
    $this->load->view('register', $data);
    $this->load->view('footer');
  }
}
