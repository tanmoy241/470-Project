<?php if(! defined('BASEPATH')) exit('No direct script access allowed');


class Doctors_model extends CI_Model{
    public function loadDoctors(){
        $query = $this->db->get_where('user_profile',array('user_type' => "doctor"));

        return $query->result();
    }

    public function doctordetail($id){
        $query = $this->db->get_where('user_profile', array('user_id' => $id));

        return $query->result();
    }

    public function doc_spec($id){
        $query = $this->db->get_where('doctor_specializations', array('doc_id' => $id));

        return $query->result();
    }

    public function doc_edu($id){
        $query = $this->db->get_where('doctor_edu', array('doc_id' => $id));

        return $query->result();
    }
    public function doc_price($id){
        $query = $this->db->get_where('doctor_pricing', array('	doctor_id' => $id));

        return $query->result();
    }
    public function doc_review($id){
        $query = $this->db->get_where('doctor_review', array('doctor_id' => $id));

        return $query->result();
    }

    public function getDocUsername($id){


        $query = $this->db->get_where('user_profile', array('user_id' => $id));


        $data = "";
        foreach ($query->result_array() as $row)
        {
            $data =  $row['user_name'];
        }

        return $data;
    }
    public function doc_timeing($id){

        $query = $this->db->get_where('doctor_timing', array('doctor_username' => $this->getDocUsername($id)));

        return $query->result();
    }

    public function search($keyword){

        $keyword = "'%".$keyword."%'";

        $query = $this->db->query("SELECT * FROM user_profile WHERE user_type = 'doctor' AND name LIKE ".$keyword." union SELECT * FROM user_profile WHERE user_type = 'doctor' AND doctor_area LIKE ".$keyword." union SELECT * FROM user_profile WHERE user_type = 'doctor' AND doctor_description LIKE ".$keyword);

        return $query->result();

    }
    public function insertreview($data){
        $this->db->insert("doctor_review", $data);
        return true;
    }
}