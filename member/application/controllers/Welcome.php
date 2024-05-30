<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$inputan = $this->input->post();

		$this->form_validation->set_rules('email_member', 'Email', 'required');
		$this->form_validation->set_rules('password_member', 'Password Member', 'required');

		$this->form_validation->set_message('required', '%s wajib diisi');

		if ($this->form_validation->run()==TRUE)
		{
			$this->load->model('Mmember');
			$output = $this->Mmember->login($inputan);

			if ($output == "ada") {
				$this->session->set_flashdata('pesan_sukses', 'Berhasil Login');
				redirect('home', 'refresh');
			} else {
				$this->session->set_flashdata('pesan_gagal', 'Gagal Login');
				redirect('/', 'refresh');
			}
		}
		$this->load->view('login');
	}
}
?>