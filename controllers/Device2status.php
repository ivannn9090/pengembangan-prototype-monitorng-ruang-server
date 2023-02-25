<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Device2status extends REST_Controller
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
        $buff1 = $this->db->get('fire1')->result();
        $fire1 = $buff1[0]->value > 0 ? "Api Terdeteksi" : "Tidak Terdeteksi";

        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );
        $buff2 = $this->db->get('fire2')->result();
        $fire2 = $buff2[0]->value > 0 ? "Api Terdeteksi" : "Tidak Terdeteksi";

        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );
        $buff3 = $this->db->get('smoke1')->result();
        $smoke1 = $buff3[0]->value > 0 ? "Asap Terdeteksi" : "Tidak Terdeteksi";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('smoke2')->result();
        $smoke2 = $buff2[0]->value > 0 ? "Asap Terdeteksi" : "Tidak Terdeteksi";

        $data = array([
            "fire1" => $fire1,
            "fire2" => $fire2,
            "smoke1" => $smoke1,
            "smoke2" => $smoke2
        ]);

        $this->response($data, 200);
    }

    
}
