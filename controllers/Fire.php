<?php
defined('BASEPATH') or exit('No direct script allowed');
date_default_timezone_set("Asia/Jakarta");
//$data['prototipe2'] = $this->Sensor_model->getvalue1();
/*----------------------------------------REQUIRE THIS PLUGIN----------------------------------------*/

require APPPATH . '/libraries/REST_Controller.php';
//use Restserver\Libraries\REST_Controller;

class Fire extends REST_Controller
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
        
        
       $prototipe4 = $this->Sensor_model->getvalue3();
      
        
        
        echo json_encode($prototipe4);

        
       
    }

    

  

    
}