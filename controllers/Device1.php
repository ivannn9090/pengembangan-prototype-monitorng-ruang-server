<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Device1 extends REST_Controller
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
        $buff1 = $this->db->get('humidity1')->result();
        $humidity1 = $buff1[0]->value;

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('humidity2')->result();
        $humidity2 = $buff2[0]->value;

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff3 = $this->db->get('temperature1')->result();
        $temperature1 = $buff3[0]->value;

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('temperature2')->result();
        $temperature2 = $buff2[0]->value;

        $data = array([
            "humidity1" => $humidity1,
            "humidity2" => $humidity2,
            "temperature1" => $temperature1,
            "temperature2" => $temperature2
        ]);

        $this->response($data, 200);
    }

    function index_post()
    {
        $humidity1 = $this->post('humidity1');
        $humidity2 = $this->post('humidity2');
        $temperature1 = $this->post('temperature1');
        $temperature2 = $this->post('temperature2');


        //Device1
        // 1-humidity 1
        // 2-humidity 2
        // 3- temperatur 1
        // 4- temperatur 2

        $status = 0;

        if ($humidity1 != null) {
            $dataHumidity = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $humidity1,
            );

            $insertHumidity = $this->db->insert('humidity1', $dataHumidity);
            if (!$insertHumidity) {
                $status = 1;
            }
        }

        if ($humidity2 != null) {
            $dataHumidity2 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $humidity2,
            );

            $insertHumidity2 = $this->db->insert('humidity2', $dataHumidity2);
            if (!$insertHumidity2) {
                $status = 2;
            }
        }

        if ($temperature1 != null) {
            $dataTemperature1 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $temperature1,
            );

            $insertTemperature1 = $this->db->insert('temperature1', $dataTemperature1);
            if (!$insertTemperature1) {
                $status = 3;
            }
        }

        if ($temperature2 != null) {
            $dataTemperature2 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $temperature2,
            );

            $insertTemperature2 = $this->db->insert('temperature2', $dataTemperature2);
            if (!$insertTemperature2) {
                $status = 4;
            }
        }

        //Device1
        // 1-humidity 1
        // 2-humidity 2
        // 3- temperatur 1
        // 4- temperatur 2

        if ($status == 0) {
            $this->response(array('Status' => 'Success'), 200);
        } elseif ($status == 1) {
            $this->response(array('Status' => 'Error on insert 1'), 200);
        } elseif ($status == 2) {
            $this->response(array('Status' => 'Error on insert 2'), 200);
        } elseif ($status == 3) {
            $this->response(array('Status' => 'Error on insert 3'), 200);
        } elseif ($status == 4) {
            $this->response(array('Status' => 'Error on insert 4'), 200);
        }
    }

    
}
