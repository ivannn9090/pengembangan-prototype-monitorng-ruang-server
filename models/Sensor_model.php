<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Sensor_model extends CI_Model
{
    public function getdevice()
    {
        $query = "SELECT `prototipe`.*, `tabel_device`.`nama_device`, `tabel_sensor`.`nama_sensor`
                  FROM `prototipe` JOIN `tabel_device`
                  ON `prototipe`.`device_id` = `tabel_device`.`id`
                  JOIN `tabel_sensor`
                  ON `prototipe`.`sensor_id` = `tabel_sensor`.`id`
                  
                
                 
               
                
                ";
       
        return $this->db->query($query)->result_array();
    }

    public function getsensor()
    {
       
        $query = "SELECT `prototipe`.*, `tabel_sensor`.`nama_sensor`
                  FROM `prototipe` JOIN `tabel_sensor`
                  ON `prototipe`.`sensor_id` = `tabel_sensor`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function join3table(){
      $this->db->select('*');
      $this->db->from('prototipe');
      $this->db->join('tabel_device','prototipe.device_id = tabel_device.id','LEFT');      
      $this->db->join('tabel_sensor','prototipe.sensor_id = tabel_device.id','LEFT');
      $query = $this->db->get();
      return $query;
   }

   public function getvalue()
   {
    $query = " SELECT `humidity3`.`id`,  `tabel_sensor`.`nama_sensor`, `humidity3`. `value`
              FROM `humidity3`
               JOIN `tabel_sensor`
                ON `humidity3`.`sensor_id` = `tabel_sensor`.`id` 
              WHERE `humidity3`.`id` IN (SELECT MAX(id) FROM `humidity3` GROUP BY `humidity3`.`sensor_id`)
              
            ";
            return $this->db->query($query)->result_array();
   }
   public function getvalue1()
   {
    $query = " SELECT `humidity`.`id`,  `tabel_sensor`.`nama_sensor`, `humidity`. `value`
              FROM `humidity`
               JOIN `tabel_sensor`
                ON `humidity`.`sensor_id1` = `tabel_sensor`.`id` 
              WHERE `humidity`.`id` IN (SELECT MAX(id) FROM `humidity` GROUP BY `humidity`.`sensor_id1`)
              
            ";
            return $this->db->query($query)->result_array();
   }
   public function getvalue2()
   {
    $query = " SELECT `temperature`.`id`,  `tabel_sensor`.`nama_sensor`, `temperature`. `value`
              FROM `temperature`
               JOIN `tabel_sensor`
                ON `temperature`.`sensor_id2` = `tabel_sensor`.`id` 
              WHERE `temperature`.`id` IN (SELECT MAX(id) FROM `temperature` GROUP BY `temperature`.`sensor_id2`)
              
            ";
            return $this->db->query($query)->result_array();
   }
   public function getvalue3()
   {
    $query = " SELECT `fire`.`id`,  `tabel_sensor`.`nama_sensor`, `fire`. `value`
              FROM `fire`
               JOIN `tabel_sensor`
                ON `fire`.`sensor_id3` = `tabel_sensor`.`id` 
              WHERE `fire`.`id` IN (SELECT MAX(id) FROM `fire` GROUP BY `fire`.`sensor_id3`)
            
            ";
            return $this->db->query($query)->result_array();
   }
   public function getvalue4()
   {
    $query = " SELECT `smoke`.`id`,  `tabel_sensor`.`nama_sensor`, `smoke`. `value`
              FROM `smoke`
               JOIN `tabel_sensor`
                ON `smoke`.`sensor_id4` = `tabel_sensor`.`id` 
              WHERE `smoke`.`id` IN (SELECT MAX(id) FROM `smoke` GROUP BY `smoke`.`sensor_id4`)
              
            ";
            return $this->db->query($query)->result_array();
   }
   public function getvalue5()
   {
    $query = " SELECT `movement`.`id`,  `tabel_sensor`.`nama_sensor`, `movement`. `value`
              FROM `movement`
               JOIN `tabel_sensor`
                ON `movement`.`sensor_id5` = `tabel_sensor`.`id` 
              WHERE `movement`.`id` IN (SELECT MAX(id) FROM `movement` GROUP BY `movement`.`sensor_id5`)
              
            ";
            return $this->db->query($query)->result_array();
   }

   public function hapussensor($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tabel_sensor');
    }
    public function hapusdevice($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tabel_device');
    }
    public function hapusprt($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('prototipe');
    }
     
}
