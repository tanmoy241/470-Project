<?php if(! defined('BASEPATH')) exit('No direct script access allowed');


class Admin_model extends CI_Model{
    public function index(){

    }

    public function doclist(){
        $query = $this->db->get_where('user_profile', array('doctor_approval' => 1, 'user_type' => "doctor"));

        return $query->result();
    }

    public function pendingdoclist(){

        $query = $this->db->get_where('user_profile', array('doctor_approval' => 0,'user_type' => "doctor"));

        return $query->result();
    }

    public function insert_doctor($data){
        $this->db->insert("user_profile", $data);
        return true;
    }

    public function approve_doctor($doc_id){
        $data =array (
            'doctor_approval' => '1'
        );

        $this->db->where('user_id', $doc_id);
        $this->db->update('user_profile', $data);
    }

    public function delete_doctor($doc_id){
        $this->db->delete('user_profile', array('user_id' => $doc_id));
    }

    public function patientlist(){
        $query = $this->db->get('user_profile');

        return $query->result();
    }

    public function insert_patient($data){
        $this->db->insert("user_profile", $data);
        return true;
    }

    public function delete_patient($id){
        $this->db->delete('user_profile', array('user_id' => $id));
    }
    public function insert_time($data){
        $this->db->insert("doctor_timing", $data);
        return true;
    }


    public function getTiming(){
        $query = $this->db->get_where('doctor_timing', array('doctor_username' => $_SESSION['username']));
        return $query->result();
    }
    public function delete_time($time_id){
        $this->db->delete('doctor_timing', array('timing_id' => $time_id));
        return true;
    }
    public function getDocId($username){


        $query = $this->db->get_where('user_profile', array('user_name' => $username));


        $data = "";
        foreach ($query->result_array() as $row)
        {
            $data =  $row['user_id'];
        }

        return $data;
    }
    public function loadappointments(){
        $query = $this->db->get_where('appointment', array('doctor_id' => $this->getDocId($_SESSION['username'])));
        return $query->result();
    }

    public function loadpatientappointments(){
        $query = $this->db->get_where('appointment', array('user_id' => $_SESSION['username']));
        return $query->result();
    }
    public function approve_app($app_id){
        $this->db->set('status', 'Approved');
        $this->db->where('appointment_id', $app_id);
        $this->db->update('appointment');
    }
    public function delete_app($app_id){
        $this->db->set('status', 'Rejected');
        $this->db->where('appointment_id', $app_id);
        $this->db->update('appointment');
    }

    public function appdetails($app_id){
        $query = $this->db->get_where('appointment', array('appointment_id' => $app_id));

        return $query->result();
    }

    public function getDocIdApp($app_id){


        $query = $this->db->get_where('appointment', array('appointment_id' => $app_id));


        $data = "";
        foreach ($query->result_array() as $row)
        {
            $data =  $row['doctor_id'];
        }

        return $data;
    }
    public function getPatientUserNameApp($app_id){


        $query = $this->db->get_where('appointment', array('appointment_id' => $app_id));


        $data = "";
        foreach ($query->result_array() as $row)
        {
            $data =  $row['user_id'];
        }

        return $data;
    }
    public function docdetails($app_id){
        $query = $this->db->get_where('user_profile', array('user_id' => $this->getDocIdApp($app_id)));

        return $query->result();
    }

    public function patientdetails($app_id){
        $query = $this->db->get_where('user_profile', array('user_name' => $this->getPatientUserNameApp($app_id)));

        return $query->result();
    }
    public function previousreport($app_id){
        $query = $this->db->get_where('patient_previous_report', array('appointment_id' => $app_id));

        return $query->result();
    }

    public function update_user($data){
        $this->db->set($data);
        $this->db->where('user_name', $_SESSION['username']);
        $this->db->update('user_profile');

        return true;
    }

    public function patientinfo(){
        $query = $this->db->get_where('user_profile',array("user_name"=>$_SESSION['username']));

        return $query->result();
    }

    public function reports(){
        $query = $this->db->get_where('patient_previous_report', array('user_name' => $_SESSION['username']));

        return $query->result();
    }
    public function deleteapp($app_id){
        $this->db->where('appointment_id', $app_id);
        $this->db->delete('appointment');
    }

    public function loadprofile(){
        $query = $this->db->get_where('user_profile', array('user_type' => "doctor"));
        return $query->result();
    }
    public function loadeducation(){
        $query = $this->db->get_where('doctor_edu', array('doc_id' => $this->getDocId($_SESSION['username'])));
        return $query->result();
    }

    public function addeducation($data){
        $this->db->insert("doctor_edu", $data);
        return true;
    }
    public function deleteedu($edu_id){
        $this->db->where('edu_id', $edu_id);
        $this->db->delete('doctor_edu');
        return true;
    }




}