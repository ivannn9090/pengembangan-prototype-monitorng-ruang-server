<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");

/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/
require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Device4 extends REST_Controller
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
        $buff1 = $this->db->get('movement1')->result();
        $movement1 = $buff1[0]->value;



        $this->db->limit(1);
        $this->db->order_by(
            'id',
            'desc'
        );


        $data = array([
            "movement1" => $movement1,
        ]);

        $this->response($data, 200);
    }

    function index_post()
    {
        $movement1 = $this->post('movement1');


        // Device4
        // - movement1

        $status = 0;

        if ($movement1 != null) {
            $dataMovement1 = array(
                'date' => date("Y-m-d"),
                'time' => date("H:i:s"),
                'value' => $movement1,
            );

            $insertMovement1 = $this->db->insert('movement1', $dataMovement1);
            if (!$insertMovement1) {
                $status = 1;
            }
        }

        // Device4
        // - movement1


        if ($status == 0) {
            $this->response(array('Status' => 'Success'), 200);
        } elseif ($status == 1) {
            $this->response(array('Status' => 'Error on insert 1'), 200);
        }
    }

   
}
