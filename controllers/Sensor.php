<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sensor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();

        $this->load->model('Sensor_model');
    }

    public function index()
    {
        $data['title'] = "sensor";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nama_sensor'] = $this->db->get('tabel_sensor')->result_array();
    
        $this->form_validation->set_rules('sensor', 'Prototipe', 'required');
       if ($this->form_validation->run() == false) {
       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('sensor/index', $data);
       $this->load->view('templates/footer');
    } else {
        $this->db->insert('tabel_sensor', ['nama_sensor' => $this->input->post('sensor')]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sensor added!</div>');
        redirect('sensor');
     }
    }

    public function device()
    {
        $data['title'] = "Device";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['nama_device'] = $this->db->get('tabel_device')->result_array();
    
        $this->form_validation->set_rules('device', 'Device', 'required');
       if ($this->form_validation->run() == false) {
       $this->load->view('templates/header', $data);
       $this->load->view('templates/sidebar', $data);
       $this->load->view('templates/topbar', $data);
       $this->load->view('sensor/device', $data);
       $this->load->view('templates/footer');
    } else {
        $this->db->insert('tabel_device', ['nama_device' => $this->input->post('device')]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New device added!</div>');
        redirect('sensor/device');
     }
    }

    public function Prototipe()
    {
        $data['title'] = 'Prototipe Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //$this->load->model('Sensor_model', 'nama_device');
       // $this->load->model('Sensor_model', 'nama_sensor');

        $data['prototipe'] = $this->Sensor_model->getdevice();
        $data['prototipe1'] = $this->Sensor_model->getvalue();
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
           $this->load->view('sensor/prototipe', $data); 
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
    public function hapus($id)
    {
        $this->Sensor_model->hapussensor($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('sensor');
    }

    public function delete($id)
    {
        $this->Sensor_model->hapusdevice($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('sensor/device');
    }

    public function deletes($id)
    {
        $this->Sensor_model->hapusprt($id);
        $this->session->set_flashdata('flash','Dihapus');
        redirect('sensor/prototipe');
    }

}
