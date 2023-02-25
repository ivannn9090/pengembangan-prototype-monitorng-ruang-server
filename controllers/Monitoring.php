<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Monitoring extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Sensor_model');
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('v_monitoring');
        $this->load->view('templates/footer');
    }

    public function Humidity()
    {
        $data['title'] = 'Humidity Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$this->load->model('Sensor_model', 'nama_device');
       // $this->load->model('Sensor_model', 'nama_sensor');

        $data['prototipe'] = $this->Sensor_model->getdevice();
        $data['prototipe1'] = $this->Sensor_model->getvalue();
        $data['prototipe2'] = $this->Sensor_model->getvalue1();
        $data['device'] = $this->db->get('tabel_device')->result_array();
        $data['sensor'] = $this->db->get('tabel_sensor')->result_array();
        $data['value'] = $this->db->get('humidity3')->result_array();
        
        $this->form_validation->set_rules('title', 'Title', 'required');
       // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('monitoring/humidity', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'device_id' => $this->input->post('device_id'),
                'sensor_id' => $this->input->post('sensor_id'),
                'url_api' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
            ];
            $this->db->insert('prototipe', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New prototipe added!</div>');
            redirect('sensor/prototipe');
        }
    }

    public function Fire()
    {
        $data['title'] = 'Fire Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$this->load->model('Sensor_model', 'nama_device');
       // $this->load->model('Sensor_model', 'nama_sensor');

        $data['prototipe'] = $this->Sensor_model->getdevice();
        $data['prototipe1'] = $this->Sensor_model->getvalue();
        $data['prototipe2'] = $this->Sensor_model->getvalue1();
        $data['prototipe3'] = $this->Sensor_model->getvalue2();
        $data['device'] = $this->db->get('tabel_device')->result_array();
        $data['sensor'] = $this->db->get('tabel_sensor')->result_array();
        $data['value'] = $this->db->get('humidity3')->result_array();
        
        $this->form_validation->set_rules('title', 'Title', 'required');
       // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('monitoring/fire', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'device_id' => $this->input->post('device_id'),
                'sensor_id' => $this->input->post('sensor_id'),
                'url_api' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
            ];
            $this->db->insert('prototipe', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New prototipe added!</div>');
            redirect('sensor/prototipe');
        }
    }

    public function Temperature()
    {
        $data['title'] = 'Temperature Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$this->load->model('Sensor_model', 'nama_device');
       // $this->load->model('Sensor_model', 'nama_sensor');

        $data['prototipe'] = $this->Sensor_model->getdevice();
        $data['prototipe1'] = $this->Sensor_model->getvalue();
        $data['prototipe2'] = $this->Sensor_model->getvalue1();
        $data['prototipe3'] = $this->Sensor_model->getvalue2();
        $data['prototipe4'] = $this->Sensor_model->getvalue3();
        $data['prototipe5'] = $this->Sensor_model->getvalue4();
        $data['prototipe6'] = $this->Sensor_model->getvalue5();
        $data['device'] = $this->db->get('tabel_device')->result_array();
        $data['sensor'] = $this->db->get('tabel_sensor')->result_array();
        $data['value'] = $this->db->get('humidity3')->result_array();
        
        $this->form_validation->set_rules('title', 'Title', 'required');
       // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('monitoring/temperature', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'device_id' => $this->input->post('device_id'),
                'sensor_id' => $this->input->post('sensor_id'),
                'url_api' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
            ];
            $this->db->insert('prototipe', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New prototipe added!</div>');
            redirect('sensor/prototipe');
        }
    }

    public function Smoke()
    {
        $data['title'] = 'Smoke Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$this->load->model('Sensor_model', 'nama_device');
       // $this->load->model('Sensor_model', 'nama_sensor');

        $data['prototipe'] = $this->Sensor_model->getdevice();
        $data['prototipe1'] = $this->Sensor_model->getvalue();
        $data['prototipe2'] = $this->Sensor_model->getvalue1();
        $data['prototipe3'] = $this->Sensor_model->getvalue2();
        $data['prototipe4'] = $this->Sensor_model->getvalue3();
        $data['prototipe5'] = $this->Sensor_model->getvalue4();
        $data['prototipe6'] = $this->Sensor_model->getvalue5();
        $data['device'] = $this->db->get('tabel_device')->result_array();
        $data['sensor'] = $this->db->get('tabel_sensor')->result_array();
        $data['value'] = $this->db->get('humidity3')->result_array();
        
        $this->form_validation->set_rules('title', 'Title', 'required');
       // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('monitoring/smoke', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'device_id' => $this->input->post('device_id'),
                'sensor_id' => $this->input->post('sensor_id'),
                'url_api' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
            ];
            $this->db->insert('prototipe', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New prototipe added!</div>');
            redirect('sensor/prototipe');
        }
    }

    public function Movement()
    {
        $data['title'] = 'Movement Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$this->load->model('Sensor_model', 'nama_device');
       // $this->load->model('Sensor_model', 'nama_sensor');

        $data['prototipe'] = $this->Sensor_model->getdevice();
        $data['prototipe1'] = $this->Sensor_model->getvalue();
        $data['prototipe2'] = $this->Sensor_model->getvalue1();
        $data['prototipe3'] = $this->Sensor_model->getvalue2();
        $data['prototipe4'] = $this->Sensor_model->getvalue3();
        $data['prototipe5'] = $this->Sensor_model->getvalue4();
        $data['prototipe6'] = $this->Sensor_model->getvalue5();
        $data['device'] = $this->db->get('tabel_device')->result_array();
        $data['sensor'] = $this->db->get('tabel_sensor')->result_array();
        $data['value'] = $this->db->get('humidity3')->result_array();
        
        $this->form_validation->set_rules('title', 'Title', 'required');
       // $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('monitoring/movement', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'device_id' => $this->input->post('device_id'),
                'sensor_id' => $this->input->post('sensor_id'),
                'url_api' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
            ];
            $this->db->insert('prototipe', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New prototipe added!</div>');
            redirect('sensor/prototipe');
        }
    }

}
