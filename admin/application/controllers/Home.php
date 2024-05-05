<?php
    class Home extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();

            if (!$this->session->userdata('id_admin'))
            {
                redirect('/', 'refresh');
            }
        }

        public function index()
        {
            $this->load->model('Mmember');
            $data["jumlah_distrik"] = $this->Mmember->jumlah_member_distrik();

            $this->load->view('header');
            $this->load->view('home', $data);
            $this->load->view('footer');
        }
    }
?>
