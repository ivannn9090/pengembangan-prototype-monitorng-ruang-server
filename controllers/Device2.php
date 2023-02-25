<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Device2 extends REST_Controller
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
        $fire1 = $buff1[0]->value;

        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );
        $buff2 = $this->db->get('fire2')->result();
        $fire2 = $buff2[0]->value;

        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );
        $buff3 = $this->db->get('smoke1')->result();
        $smoke1 = $buff3[0]->value;

        $this->db->limit(1);
        $this->db->order_by('id', 'desc');
        $buff2 = $this->db->get('smoke2')->result();
        $smoke2 = $buff2[0]->value;

        $data = array([
            "fire1" => $fire1,
            "fire2" => $fire2,
            "smoke1" => $smoke1,
            "smoke2" => $smoke2
        ]);

        $this->response($data, 200);
    }

    function index_post()
    {
        $fire1 = $this->post('fire1');
        $fire2 = $this->post('fire2');
        $smoke1 = $this->post('smoke1');
        $smoke2 = $this->post('smoke2');


        // Device2
        // - fire1
        // - fire2
        // - smoke 1
        // - smoke 2


        $status = 0;

        if ($fire1 != null) {
            $dataFire1 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $fire1,
            );

            $insertFire1 = $this->db->insert('fire1', $dataFire1);
            if (!$insertFire1) {
                $status = 1;
            }
        }

        if ($fire2 != null) {
            $dataFire2 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $fire2,
            );

            $insertFire2 = $this->db->insert('fire2', $dataFire2);
            if (!$insertFire2) {
                $status = 2;
            }
        }

        if ($smoke1 != null) {
            $dataSmoke1 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $smoke1,
            );

            $insertSmoke1 = $this->db->insert('smoke1', $dataSmoke1);
            if (!$insertSmoke1) {
                $status = 3;
            }
        }

        if ($smoke2 != null) {
            $dataSmoke2 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $smoke2,
            );

            $insertSmoke2 = $this->db->insert('smoke2', $dataSmoke2);
            if (!$insertSmoke2) {
                $status = 4;
            }
        }

        // Device2
        // - fire1
        // - fire2
        // - smoke 1
        // - smoke 2

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
