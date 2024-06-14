<?php
class Mkeranjang extends CI_Model
{
  function simpan($inputan, $id_produk)
  {
    $this->db->where('id_produk', $id_produk);
    $qp = $this->db->get('produk');
    $dp = $qp->row_array();

    $inputan['id_produk'] = $id_produk;
    $inputan['id_member_beli'] = $this->session->userdata('id_member');
    $inputan['id_member_jual'] = $dp['id_member'];

    $this->db->where('id_member_beli', $this->session->userdata('id_member'));
    $this->db->where('id_produk', $id_produk);
    $qk = $this->db->get('keranjang');
    $dk = $qk->row_array();

    if (empty($dk)) {
      $this->db->insert('keranjang', $inputan);
    } else {
      $this->db->where('id_member_beli', $this->session->userdata('id_member'));
      $this->db->where('id_produk', $id_produk);
      $this->db->update('keranjang', $inputan);
    }
  }

  function tampil()
  {
    $this->db->where('id_member_beli', $this->session->userdata('id_member'));
    $this->db->join('member', 'keranjang.id_member_jual = member.id_member', 'left');
    $this->db->group_by('member.id_member');
    
    $qmj = $this->db->get('keranjang');
    $dmj = $qmj->result_array();

    $output = array();

    foreach ($dmj as $key => $per_penjual) {
      $this->db->where('id_member_beli', $this->session->userdata('id_member'));
      $this->db->where('id_member_jual', $per_penjual['id_member']);
      $this->db->join('produk', 'keranjang.id_produk = produk.id_produk', 'left');
      
      $qkp = $this->db->get('keranjang');
      $dkp = $qkp->result_array();

      $per_penjual['produk'] = $dkp;

      $output[] = $per_penjual;
    }

    return $output;
  }

  function hapus($id_keranjang)
  {
    $this->db->where('id_keranjang', $id_keranjang);
    $this->db->where('id_member_beli', $this->session->userdata('id_member'));
    $this->db->delete('keranjang');
    
  }
}
