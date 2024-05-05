<?php
    class Mkategori extends CI_Model
    {
        function tampil()
        {
            $q = $this->db->get('kategori');
            
            $d = $q->result_array();

            return $d;
        }

		function simpan($inputan)
		{
			$config['upload_path'] = './asset/upload/';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			$upload = $this->upload->do_upload("foto_kategori");

			if($upload)
			{
				$inputan['foto_kategori'] = $this->upload->data('file_name');
			}

			$this->db->insert('kategori', $inputan);
		}

		function hapus($id_kategori)
		{
			$this->db->where('id_kategori', $id_kategori);
			$this->db->delete('kategori');
		}

		function detail($id_kategori)
		{
			$this->db->where('id_kategori', $id_kategori);
			$q = $this->db->get('kategori');
			$d = $q->row_array();

			return $d;
		}

		function edit($inputan, $id_kategori)
		{
			$config['upload_path'] = './asset/upload';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);

			$ngupload = $this->upload->do_upload('foto_kategori');

			if($ngupload)
			{
				$inputan['foto_kategori'] = $this->upload->data('file_name');
			}

			$this->db->where('id_kategori', $id_kategori);
			$this->db->update('kategori', $inputan);
		}
    }
?>
