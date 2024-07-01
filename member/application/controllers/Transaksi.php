<?php
class Transaksi extends CI_Controller
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
        $id_member = $this->session->userdata('id_member');

        $this->load->model('Mtransaksi');

        $data['transaksi'] = $this->Mtransaksi->transaksi_member_beli($id_member);

        $this->load->view('header');
        $this->load->view('transaksi', $data);
        $this->load->view('footer');
    }

    function detail($id_transaksi)
    {
        $this->load->model('Mtransaksi');
        $data['transaksi'] = $this->Mtransaksi->detail($id_transaksi);

        $data['transaksi_detail'] = $this->Mtransaksi->transaksi_detail($id_transaksi);

        $snapToken = '';
        $data['cekmidtrans'] = array();
        if ($data['transaksi']['status_transaksi'] == "pesan") {
            include 'midtrans-php\Midtrans.php';

            \Midtrans\Config::$serverKey = 'SB-Mid-server-Y-HW8k0FALpd3SzwLMBuUGBJ';
            \Midtrans\Config::$isProduction = false;
            \Midtrans\Config::$isSanitized = true;
            \Midtrans\Config::$is3ds = true;
            $params['transaction_details']['order_id'] = $data['transaksi']['kode_transaksi'];
            $params['transaction_details']['gross_amount'] = $data['transaksi']['total_transaksi'];

            try {
                $snapToken = \Midtrans\Snap::getSnapToken($params);
            } catch (Exception $e) {
            }
            $data['snapToken'] = $snapToken;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/" . $data['transaksi']['kode_transaksi'] . "/status",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "accept: application/json", "authorization: Basic U0ItTWlkLXNlcnZlci1ZLUhXOGswRkFMcGQzU3p3TE1CdVVHQko6"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                // echo $response;
                $respon = json_decode($response, TRUE);
                if (isset($respon['status_code']) && in_array($respon['status_code'], [200, 201])) {
                    $data['cekmidtrans'] = $respon;

                    if ($respon['transaction_status'] == 'settlement') {
                        $this->Mtransaksi->set_lunas($id_transaksi);
                        redirect('transaksi/detail/' . $id_transaksi, 'refresh');
                    }
                }
            }
        }

        $this->load->view('header');
        $this->load->view('transaksi_detail', $data);
        $this->load->view('footer');
    }
}
