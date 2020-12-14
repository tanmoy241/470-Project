<?php if(! defined('BASEPATH')) exit('No direct script access allowed');


class Patient_model extends CI_Model{
    public function insert_data($data){

        $this->db->insert("user_profile", $data);

        return true;
    }

    public function can_login($username, $password){
        $this->db->where('user_name', $username);
        $this->db->where('user_password', $password);
        $query = $this->db->get('user_profile');

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row){
                return $row->user_type;
            }
        }
        else
        {
            return false;
        }
    }

    public function profile_pic($username){
        $this->db->where('user_name', $username);
        $query = $this->db->get('user_profile');

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row){
                return $row->user_profile_pic;
            }
        }
        return false;
    }
}