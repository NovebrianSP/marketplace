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
    }
?>