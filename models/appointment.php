<?php if(! defined('BASEPATH')) exit('No direct script access allowed');


class Appointment extends CI_Model{
    public function bookapp($data){
        $this->db->insert("appointment", $data);
        return true;
    }
    public function prevreport($data2){
        $this->db->insert("patient_previous_report", $data2);
        return true;
    }
}