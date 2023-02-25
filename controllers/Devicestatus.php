<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Devicestatus extends REST_Controller
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

       // $this->db->limit(1);
        //$this->db->order_by('id', 'desc');
        //$buff3 = $this->db->get('temperature1')->result();
       // $temperature1 = $buff3[0]->value > 20 ? "Suhu Berlebihan" : "Normal";
       // $temperaturess1 = $buff13[0]->value;

       $this->db->limit(1);
       $this->db->order_by('id', 'desc');
       $buff3 = $this->db->get('temperature1')->result();
       if ($buff3[0]->value >= 20 && $buff3[0]->value <= 25) {
           $temperature1 = "Normal";
       } elseif ($buff3[0]->value > 25) {
           $temperature1 = "Suhu Berlebihan";
       } else {
           $temperature1 = "Suhu Rendah";
       }

       $this->db->limit(1);
       $this->db->order_by('id', 'desc');
       $buff3 = $this->db->get('humidity1')->result();
       if ($buff3[0]->value >= 40 && $buff3[0]->value <= 60) {
           $humidity1 = "Normal";
       } elseif ($buff3[0]->value > 60) {
           $humidity1 = "Ruangan Lembab";
       } else {
           $humidity1 = "Ruangan Kering";
       }

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff6 = $this->db->get('temperature')->result();
        $temperatures = $buff6[0]->value > 20 ? "Suhu Berlebihan" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('temperature2')->result();
        $temperature2 = $buff2[0]->value > 20 ? "Suhu Berlebihan" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff5 = $this->db->get('temperature3')->result();
        $temperature3 = $buff5[0]->value > 20 ? "Suhu Berlebihan" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff6 = $this->db->get('movement1')->result();
        $movement1 = $buff6[0]->value > 0 ? "Ada Gerakan" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff6 = $this->db->get('movement')->result();
        $movement = $buff6[0]->value > 0 ? "Ada Gerakan" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff1 = $this->db->get('fire1')->result();
        $fire1 = $buff1[0]->value > 0 ? "Api Terdeteksi" : "Normal";
       
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff1 = $this->db->get('fire')->result();
        $fire = $buff1[0]->value > 0 ? "Api Terdeteksi" : "Normal";

        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );
        $buff2 = $this->db->get('fire2')->result();
        $fire2 = $buff2[0]->value > 0 ? "Api Terdeteksi" : "Normal";

        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );
        $buff3 = $this->db->get('smoke1')->result();
        $smoke1 = $buff3[0]->value > 0 ? "Asap Terdeteksi" : "Normal";

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('smoke2')->result();
        $smoke2 = $buff2[0]->value > 0 ? "Asap Terdeteksi" : "Normal";
        
        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('smoke')->result();
        $smoke = $buff2[0]->value > 0 ? "Asap Terdeteksi" : "Normal";

        $data = array([
            "temperature1" => $temperature1,
            "temperatures" => $temperatures,
            "temperature2" => $temperature2,
            "temperature3" => $temperature3,
          //  "temperaturess1" => $temperaturess1,
            "fire1" => $fire1,
            "fire" => $fire,
            "fire2" => $fire2,
            "smoke1" => $smoke1,
            "smoke" => $smoke,
            "smoke2" => $smoke2,
            "movement1" => $movement1,
            "movement" => $movement,
            "humidity1" => $humidity1,
        ]);

        $this->response($data, 200);
    }

   
}
