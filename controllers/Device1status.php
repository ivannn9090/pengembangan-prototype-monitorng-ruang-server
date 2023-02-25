<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Device1status extends REST_Controller
{
    /*----------------------------------------CONSTRUCTOR----------------------------------------*/
    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();
    }

    /*----------------------------------------GET KONTAK----------------------------------------*/
    function index_get()
    {

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff3 = $this->db->get('temperature1')->result();
        $temperature1 = $buff3[0]->value > 20 ? "Suhu Berlebihan" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('temperature2')->result();
        $temperature2 = $buff2[0]->value > 20 ? "Suhu Berlebihan" : "Normal";

        $data = array([
            "temperature1" => $temperature1,
            "temperature2" => $temperature2
        ]);

        $this->response($data, 200);
    }

   
}
