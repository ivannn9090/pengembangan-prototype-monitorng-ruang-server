<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");
//$data['prototipe2'] = $this->Sensor_model->getvalue1();
/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/

require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Device extends REST_Controller
{
   
    function __construct($config = 'rest')
    {
        parent::__construct($config);
        $this->load->database();

        $this->load->model('Sensor_model');
    }

    /*----------------------------------------GET KONTAK----------------------------------------*/
    function index_get()
   {
        
        
       $data['prototipe2'] = $this->Sensor_model->getvalue1();
     
        
        echo json_encode($data);

        
       
    }

    function datahumidity()
    {
        $prototipe2 = $this->Sensor_model->getvalue1();
        echo json_encode($prototipe2);
    }

    function index_post()
    {
        $humidity = $this->post('humidity');
        $temperature = $this->post('temperature');
        $fire = $this->post('fire');
        $smoke = $this->post('smoke');
        $movement = $this->post('movement');
        $sensor_id1 = $this->post('sensor_id1');
        $sensor_id2 = $this->post('sensor_id2');
        $sensor_id3 = $this->post('sensor_id3');
        $sensor_id4 = $this->post('sensor_id4');
        $sensor_id5 = $this->post('sensor_id5');


        // Device3
        // -Humidity 3
        // - temperatur 3


        $status = 0;
        //humidity
        if ($humidity != null) {
            $dataHumidity = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $humidity,
                'sensor_id' => $sensor_id1,
            );

            $insertHumidity = $this->db->insert('humidity', $dataHumidity);
            if (!$insertHumidity) {
                $status = 1;
            }
        }


        //suhu
        if ($temperature != null) {
            $dataTemperature = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $temperature,
                'sensor_id2' => $sensor_id2,
            );

            $insertTemperature = $this->db->insert('temperature', $dataTemperature);
            if (!$insertTemperature) {
                $status = 2;
            }
        }

        //api
        if ($fire != null) {
            $dataFire = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $fire,
                'sensor_id3' => $sensor_id3,
            );

            $insertFire = $this->db->insert('fire', $dataFire);
            if (!$insertFire) {
                $status = 3;
            }
        }

        //asap
        if ($smoke != null) {
            $dataSmoke = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $smoke,
                'sensor_id4' => $sensor_id4,
            );

            $insertSmoke = $this->db->insert('smoke', $dataSmoke);
            if (!$insertSmoke) {
                $status = 3;
            }
        }

        //gerak
        if ($movement != null) {
            $dataMovement = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $movement,
                'sensor_id5' => $sensor_id5,
            );

            $insertMovement = $this->db->insert('movement', $dataMovement);
            if (!$insertMovement) {
                $status = 5;
            }
        }

        // Device3
        // -Humidity 3
        // - temperatur 3

        if ($status == 0) {
            $this->response(array('Status' => 'Success'), 200);
        } elseif ($status == 1) {
            $this->response(array('Status' => 'Error on insert 1'), 200);
        } elseif ($status == 2) {
            $this->response(array('Status' => 'Error on insert 2'), 200);
        }elseif ($status == 3) {
            $this->response(array('Status' => 'Error on insert 3'), 200);
        } elseif ($status == 4) {
            $this->response(array('Status' => 'Error on insert 4'), 200);
        } elseif ($status == 5) {
            $this->response(array('Status' => 'Error on insert 5'), 200);
        }
    }

  
}