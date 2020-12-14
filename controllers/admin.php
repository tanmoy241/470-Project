<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


    public function index(){

        $this->load->view('admin/index');

    }
    public function dashboard(){


        $this->load->view('admin/index');

    }
    public function doctors(){

        $this->load->model('admin_model');

        $data['doclist'] = $this->admin_model->doclist();

        $this->load->view('admin/doctors',$data);
    }

    public function patient(){
        $this->load->model('admin_model');

        $data['patientlist'] = $this->admin_model->patientlist();

        $this->load->view('admin/patient' ,$data);
    }
    public function adddoctors(){
        $this->load->view('admin/adddoctors');
    }

    public function addpatient(){
        $this->load->view('admin/addpatient');
    }

    public function pendingdoctor(){

        $this->load->model('admin_model');

        $data['doclist'] = $this->admin_model->pendingdoclist();

        $this->load->view('admin/pendingdoctors',$data);
    }

    //inser
    public function insert_doctor(){

        $this->load->model('admin_model');

        $type = explode('.',$_FILES['pic']['name']);
        $type = $type[count($type) - 1];
        $url = "./images/".uniqid(rand()).'.'.$type;
        if(in_array($type, array("jpg","jpeg","gif","png"))){
            if(is_uploaded_file($_FILES['pic']['tmp_name'])){
                if(move_uploaded_file($_FILES['pic']['tmp_name'],$url)){
                    $url = $url;
                }
            }
        }


        $data = array(
            "name"     =>$this->input->post("name"),
            "user_name"     =>$this->input->post("username"),
            "user_phoneno"          =>$this->input->post("phoneno"),
            "user_email"          =>$this->input->post("email"),
            "user_address"          =>$this->input->post("address"),
            "user_password"          =>$this->input->post("password"),
            "doctor_area"          =>$this->input->post("area"),
            "doctor_description"          =>$this->input->post("disc"),
            "user_profile_pic"                  => $url,
            "doctor_approval"          =>1
        );

        if($this->admin_model->insert_doctor($data)){
            redirect(base_url()."admin/doctors");
        }

    }

    public function approve_doctor($doc_id){
        $this->load->model('admin_model');
        $this->admin_model->approve_doctor($doc_id);

        $this->pendingdoctor();
    }

    public function delete_doctor($doc_id){
        $this->load->model('admin_model');
        $this->admin_model->delete_doctor($doc_id);

        $this->doctors();
    }

    public function insert_patient(){
        $this->load->model('admin_model');
        $data = array(
            "name"     =>$this->input->post("name"),
            "user_name"     =>$this->input->post("username"),
            "user_phoneno"          =>$this->input->post("phoneno"),
            "user_email"          =>$this->input->post("email"),
            "user_address"          =>$this->input->post("address"),
            "user_password"          =>$this->input->post("password"),
        );

        if($this->admin_model->insert_patient($data)){
            $this->patient();
        }

    }

    public function delete_patient($id){
        $this->load->model('admin_model');
        $this->admin_model->delete_patient($id);

        $this->patient();
    }

    public function timing(){
        $this->load->model('admin_model');


        $data = array(
            "timeing" => $this->admin_model->getTiming()
        );



        $this->load->view('admin/timing',$data);
    }

    public function addtime(){
        $this->load->model('admin_model');

        $data = array(
            "doctor_username"     => $_SESSION['username'],
            "time_from"     =>$this->input->post("timefrom"),
            "time_to"          =>$this->input->post("timeto"),
        );
        if($this->admin_model->insert_time($data)){
            redirect(base_url()."admin/timing");
        }
    }
    public function deleteTime($time_id){
        $this->load->model('admin_model');

        if($this->admin_model->delete_time($time_id)){
            redirect(base_url()."admin/timing");
        }
    }
    public function appointments(){
        $this->load->model('admin_model');

        $data = array(
            "appointment_list" => $this->admin_model->loadappointments()
        );
        $this->load->view('admin/appointments',$data);
    }
    public function appointmentspatient(){
        $this->load->model('admin_model');

        $data = array(
            "appointment_list" => $this->admin_model->loadpatientappointments()
        );
        $this->load->view('admin/appointmentspatient',$data);
    }

    public function approveapp($app_id){
        $this->load->model('admin_model');
        $this->admin_model->approve_app($app_id);

        redirect(base_url()."admin/appointments");
    }
    public function deleteapp($app_id){
        $this->load->model('admin_model');
        $this->admin_model->delete_app($app_id);

        redirect(base_url()."admin/appointments");
    }
    public function appdetails($app_id){
        $this->load->model('admin_model');

        $data = array(
            "appdetails"=>$this->admin_model->appdetails($app_id),
            "docdetails"=>$this->admin_model->docdetails($app_id),
            "patientdetails"=>$this->admin_model->patientdetails($app_id),
            "previousreport"=>$this->admin_model->previousreport($app_id)


        );

        $this->load->view('admin/appdetails',$data);


    }

    public function profile(){
        $this->load->model('admin_model');

        $data = array(
            "patientlist" => $this->admin_model->patientinfo(),
            "previousreport" => $this->admin_model->reports()
        );

        $this->load->view('admin/profile',$data);
    }
    public function editprofile(){
        $this->load->model('admin_model');

        $type = explode('.',$_FILES['pic']['name']);
        $type = $type[count($type) - 1];
        $url = "./images/".uniqid(rand()).'.'.$type;
        if(in_array($type, array("jpg","jpeg","gif","png"))){
            if(is_uploaded_file($_FILES['pic']['tmp_name'])){
                if(move_uploaded_file($_FILES['pic']['tmp_name'],$url)){
                    $url = $url;
                }
            }
        }
        $session_data = array(
            'profile_picture' => $url
        );
        $this->session->set_userdata($session_data);

        $data = array(
            "user_symptoms"     => $this->input->post('symptoms'),
            "user_password"     =>$this->input->post("pass"),
            "user_profile_pic"     =>$url,

        );
        if($this->admin_model->update_user($data)){
            redirect(base_url()."admin/profile");
        }
    }

    public function cancelappointment($app_id){
        $this->load->model('admin_model');
        $this->admin_model->deleteapp($app_id);

        redirect(base_url()."admin/appointmentspatient");

    }
    public function docprofile(){
        $this->load->model('admin_model');
        $data = array(
            "docprofile" => $this->admin_model->loadprofile(),
            "doceducation" => $this->admin_model->loadeducation()
        );

        $this->load->view('admin/docprofile',$data);
    }

    public function editdocprofile(){
        $this->load->model('admin_model');

        $type = explode('.',$_FILES['pic']['name']);
        $type = $type[count($type) - 1];
        $url = "./images/".uniqid(rand()).'.'.$type;
        if(in_array($type, array("jpg","jpeg","gif","png"))){
            if(is_uploaded_file($_FILES['pic']['tmp_name'])){
                if(move_uploaded_file($_FILES['pic']['tmp_name'],$url)){
                    $url = $url;
                }
            }
        }

        $session_data = array(
            'profile_picture' => $url
        );
        $this->session->set_userdata($session_data);

        $data = array(
            "user_password"     =>$this->input->post("pass"),
            "doctor_area"     =>$this->input->post("area"),
            "doctor_description"     =>$this->input->post("des"),
            "doctor_area"     =>$this->input->post("area"),
            "user_profile_pic"     =>$url,

        );
        if($this->admin_model->update_user($data)){
            redirect(base_url()."admin/docprofile");
        }
    }
    public function addeducation(){
        $this->load->model('admin_model');
        $data = array(
            "edu_type"     =>$this->input->post("education"),
            "doc_id"     =>$this->admin_model->getDocId($_SESSION['username'])
        );

        if($this->admin_model->addeducation($data)){
            redirect(base_url()."admin/docprofile");
        }
    }

    public function deleteedu($edu_id){
        $this->load->model('admin_model');
        if($this->admin_model->deleteedu($edu_id)){
            redirect(base_url()."admin/docprofile");
        }

    }



}