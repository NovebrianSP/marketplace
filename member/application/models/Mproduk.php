<?php
class Mproduk extends CI_Model
{
    function tampil()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('member', 'produk.id_member = member.id_member', 'inner');

        $q = $this->db->get();

        $d = $q->result_array();

        return $d;
    }

    function produk_member($id_member)
    {
        $this->db->where('id_member', $id_member);
        $q = $this->db->get('produk');
        $d = $q->result_array();

        return $d;
    }

    function simpan($inputan)
    {
        $config['upload_path'] = $this->config->item("assets_produk");
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $upload  = $this->upload->do_upload("foto_produk");

        if ($upload) {
            $inputan['foto_produk'] = $this->upload->data("file_name");
        }

        $inputan['id_member'] = $this->session->userdata("id_member");

        $this->db->insert('produk', $inputan);
    }

    function detail($id_produk)
    {
        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id_produk);
        $this->db->join('kategori', 'produk.id_kategori = kategori.id_kategori', 'left');
        $q = $this->db->get('produk');
        $d = $q->row_array();

        return $d;
    }

    function ubah($inputan, $id_produk)
    {
        $config['upload_path'] = $this->config->item("assets_produk");
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        $upload  = $this->upload->do_upload("foto_produk");

        if ($upload) {
            $inputan['foto_produk'] = $this->upload->data("file_name");
        }

        $inputan['id_member'] = $this->session->userdata("id_member");

        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id_produk);
        $this->db->update('produk', $inputan);
    }

    function hapus($id_produk)
    {
        $this->db->where('id_member', $this->session->userdata('id_member'));
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }
}
