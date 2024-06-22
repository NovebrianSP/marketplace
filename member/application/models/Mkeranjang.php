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

  function tampil_member_jual($id_member_jual)
  {
    $this->db->where('id_member_jual', $id_member_jual);
    $this->db->where('id_member_beli', $this->session->userdata('id_member'));
    $this->db->join('produk', 'keranjang.id_produk = produk.id_produk', 'left');
    $q = $this->db->get('keranjang');
    $dk = $q->result_array();
    return $dk;
  }

  function checkout($keranjang, $member_jual, $member_beli, $nama_ekspedisi, $ongkirterpilih)
  {

    $totalbelanja = 0;
    $totalberat = 0;
    foreach ($keranjang as $k => $v) {
      $totalbelanja += $v['jumlah'] * $v['harga_produk'];
      $totalberat += $v['jumlah'] * $v['berat_produk'];
    }

    $m['kode_transaksi'] = date("YmdH") . rand(1111, 9999);
    $m['id_member_beli'] = $member_beli['id_member'];
    $m['id_member_jual'] = $member_jual['id_member'];
    $m['tanggal_transaksi'] = date("Y-m-d H:i:s");
    $m['belanja_transaksi'] = $totalbelanja;
    $m['status_transaksi'] = 'pesan';
    $m['ongkir_transaksi'] = $ongkirterpilih['cost'][0]['value'];
    $m['total_transaksi'] = $totalbelanja + $ongkirterpilih['cost'][0]['value'];
    $m['bayar_transaksi'] = $totalbelanja + $ongkirterpilih['cost'][0]['value'];
    $m['distrik_pengirim'] = $member_jual['nama_distrik_member'];
    $m['nama_pengirim'] = $member_jual['nama_member'];
    $m['wa_pengirim'] = $member_jual['wa_member'];
    $m['alamat_pengirim'] = $member_jual['alamat_member'];
    $m['distrik_penerima'] = $member_beli['nama_distrik_member'];
    $m['nama_penerima'] = $member_beli['nama_member'];
    $m['wa_penerima'] = $member_beli['wa_member'];
    $m['alamat_penerima'] = $member_beli['alamat_member'];
    $m['nama_ekspedisi'] = $nama_ekspedisi;
    $m['layanan_ekspedisi'] = $ongkirterpilih['description'];
    $m['estimasi_ekspedisi'] = $ongkirterpilih['cost'][0]['value'];
    $m['berat_ekspedisi'] = $totalberat;

    $this->db->insert('transaksi', $m);

    $id_transaksi = $this->db->insert_id();
    foreach ($keranjang as $key => $v) {
    $td['id_transaksi'] = $id_transaksi;
    $td['id_produk'] = $v['id_produk'];
    $td['nama_beli'] = $v['nama_produk'];
    $td['harga_beli'] = $v['harga_produk'];
    $td['jumlah_beli'] = $v['jumlah'];

    $this->db->insert('transaksi_detail', $td);
    }

    $this->db->where('id_member_jual', $member_jual['id_member']);
    $this->db->where('id_member_beli', $member_beli['id_member']);
    $this->db->delete('keranjang');
    
    return $id_transaksi;
  }
}
