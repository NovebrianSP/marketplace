<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keranjang extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    if (!$this->session->userdata('id_member')) {
      redirect('/', 'refresh');
    }
  }

  public function index()
  {
    $this->load->model('Mkeranjang');
    $data['keranjang'] = $this->Mkeranjang->tampil();

    $this->load->view('header');
    $this->load->view('keranjang', $data);
    $this->load->view('footer');
  }

  function hapus($id_keranjang)
  {
    $this->load->model('Mkeranjang');
    $this->Mkeranjang->hapus($id_keranjang);

    $this->session->set_flashdata('pesan_sukses', 'produk berhasil dihapus dari keranjang');
    redirect('keranjang', 'refresh');
  }

  function checkout($id_member_jual)
  {
    $this->load->model('Mkeranjang');
    $data['keranjang'] = $this->Mkeranjang->tampil_member_jual($id_member_jual);

    $this->load->model('Mmember');
    $data['member_jual'] = $this->Mmember->detail($id_member_jual);
    
    $id_member_beli = $this->session->userdata('id_member');
    $data['member_beli'] = $this->Mmember->detail($id_member_beli);
    
    $this->load->view('header');
    $this->load->view('checkout', $data);
    $this->load->view('footer');
  }
}

/* End of file Controllername.php */
